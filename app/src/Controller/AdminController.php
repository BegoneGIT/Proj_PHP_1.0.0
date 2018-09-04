<?php
/**
 * Admin controller.
 *
 * @copyright (c) 2018 Mateusz Bulat
 */
namespace Controller;

use Form\EditRecordType;
use Repository\UserRepository;
use Repository\FileRepository;
use Repository\TrackRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Repository\PartsRepository;
use Form\RegisterType;
use Form\DeleteType;
use Form\CsvType;

/**
 * Class AdminContoller
 */

class AdminController implements ControllerProviderInterface
{
    /**
     * Routing settings.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Silex\ControllerCollection Result
     */

    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/users', [$this, 'indexUsersAction'])->bind('user_index');
        $controller->match('/{userLogin}/editUser', [$this, 'editUserData'])
           // ->assert('userLogin', '[1-9]\d*')
            ->bind('user_edit')
            ->method('GET|POST');
        $controller->match('/{userLogin}/deleteUser', [$this, 'deleteUser'])
            ->bind('delete_chosen_user')
            ->method('GET|POST');
        $controller->match('/display_for_deletion', [$this, 'displayDeletion'])
            ->bind('show_for_delete')
            ->method('GET|POST');
        $controller->get('addcsv',[$this, 'addCsv'])->bind('addCsv')
            ->method('GET|POST');
        $controller->match('/usersTracked', [$this, 'usersTracked'])
            ->bind('users_tracked')
            ->method('GET|POST');
        $controller->match('/{partID}/edit',[$this, 'modifyRecord'])
            ->bind('modify_part_data')
            ->method('GET|POST');


        return $controller;
    }

    /**
     * User data action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */

    public function indexUsersAction(Application $app, $page = 1)
    {
        $userRepository = new UserRepository($app['db']);

        return $app['twig']->render(
            'userdata/displayUsers.html.twig',
            ['paginator' => $userRepository->findAllPaginated($page)]
        );
    }

    /**
     * Edit user data
     *
     * @param Application $app
     * @param $userLogin
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Doctrine\DBAL\DBALException
     */
    public function editUserData(Application $app, $userLogin,Request $request)
    {
        $userRepository = new UserRepository($app['db']);


        $userData = $userRepository->displayUserData($userLogin);

        $formFill = array_merge(
            $userData['userData'], $userData['phone'], $userData['adress']
        );
        $formFill['login'] = $userData['login'];


        $form = $app['form.factory']->createBuilder(RegisterType::class, $formFill)->getForm();
        //dump($formFill);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $formData=$form->getData();
            $formData['password'] = $app['security.encoder.bcrypt']->encodePassword($formData['password'], '');
            $userRepository->updateData($formData,$userLogin);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.user_data_successfully_edited',
                ]
            );

            return $app->redirect($app['url_generator']->generate('user_index'), 301);
        }

        return $app['twig']->render(
            'userdata/editUserData.html.twig',
            [
                'tag' => $userData,
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * Displays users for deletion
     *
     * @param Application $app
     * @param int $page
     * @return mixed
     */
    public function displayDeletion(Application $app, $page = 1)
    {
        $userRepository = new UserRepository($app['db']);

        return $app['twig']->render(
            'userdata/displayDeletion.html.twig',
            ['paginator' => $userRepository->findAllPaginated($page)]
        );
    }

    /**
     * Deletes user data
     *
     * @param Application $app
     * @param $userLogin
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Doctrine\DBAL\DBALException
     */
    public function deleteUser(Application $app, $userLogin, Request $request)
    {
        $userRepository = new UserRepository($app['db']);


        $form = $app['form.factory']->createBuilder(DeleteType::class)->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $userRepository->deleteUser($userLogin);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.user_successfully_deleted',
                ]
            );

            return $app->redirect($app['url_generator']->generate('homepage'), 301);
        }
        return $app['twig']->render(
            'delete/deleteChosenUser.html.twig',
            [
                'userLogin' => $userLogin,
                'form' => $form->createView()
            ]
        );
    }


    public function addCsv(Application $app, Request $request)
    {
        $csv = [];


        $form = $app['form.factory']->createBuilder(CsvType::class, $csv)
            //->setMethod('GET')
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $table = new FileRepository($app['db']);
            $csv = $form->getData();


      //      $table->createTable($csv['name']);

//            dump($csv['csvfile']->getClientOriginalName());
            $fop = fopen($csv['csvfile'],'r');
            $sample = $fop;
            $columns = fgetcsv($sample,null,';');
            if(count($columns)<11 || strpbrk($columns[1],'\"\'\/')){

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'error',
                        'message' => 'message.unvalid_csv',
                    ]
                );

                return $app['twig']->render(
                    'fileUpload/index_csv.html.twig',
                    [
                        'track' => $csv,
                        'form' => $form->createView(),
                    ]
                );
            }

            $table->loopInsert($csv['name'],$fop);
/*            while(! feof($fop))
            {
                $row = fgetcsv($fop,null ,';' );
                $table->insertData($csv['name'],$row);
            }*/

/*            $expr = fgetcsv($fop,null ,';' );
            $table->insertData($csv['name'],$expr );*/

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.part_successfully_added',
                ]
            );


           // return $app->redirect($app['url_generator']->generate('parts_index'), 301);
        }

        return $app['twig']->render(
            'fileUpload/index_csv.html.twig',
            [
                'track' => $csv,
                'form' => $form->createView(),
            ]
        );
    }


    public function usersTracked(Application $app)
    {
        $userTracked = new TrackRepository($app['db']);

        $allTracked = $userTracked->usersTracked();

        return $app['twig']->render(
            'track/usersTracked.html.twig',
            ['usersTracked' => $allTracked]
        );
    }

    public function modifyRecord(Application $app, Request $request, $partID)
    {
        $partData = new PartsRepository($app['db']);
        $result = $partData->partData($partID);

        $formFill['ilosc'] = $result[0]['STAN_MIN'];
        $formFill['cena'] = $result[0]['CENA'];


        $form = $app['form.factory']->createBuilder(EditRecordType::class, $formFill)->getForm();
        $form->handleRequest($request);

        $update = $form->getData();
        $update['ID'] = $partID;

        if ($form->isSubmitted() && $form->isValid()){
            $partData->updatePart($update);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.part_successfully_edited',
                ]
            );

        }



        return $app['twig']->render(
            'parts/editPart.html.twig',
            [
                'partID' => $partID,
                'partData' => $result,
                'form' => $form->createView(),
            ]
        );

    }

}