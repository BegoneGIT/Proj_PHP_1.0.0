<?php

/** Account controller.
 *
 * Used to manage user data
 *
 * @copyright (c) 2018 Mateusz Bulat
 */



namespace Controller;

use Form\EditDataType;
use Form\EditPassType;
use Form\RegisterType;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\UserRepository;
use Form\DeleteType;

/**
 * Class AccountController
 */

class AccountController implements ControllerProviderInterface
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
        $controller->get('/', [$this, 'indexAction'])->bind('account_index');
        $controller->get('/editAccount', [$this, 'editData'])->bind('account_edit')
                    ->method('GET|POST');
        $controller->get('/delete', [$this, 'deleteUser'])->bind('deleteUser')
                   ->method('GET|POST');
        $controller->get('/editPass', [$this, 'editPass'])->bind('editPass')
                   ->method('GET|POST');


        return $controller;
    }


    /**
     * User panel action.
     * Lists user data.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */

    public function indexAction(Application $app, $page = 1)
    {
        $UserRepository = new UserRepository($app['db']);

        $userLogin = $app['security.token_storage']->getToken()->getUser()->getUsername();


        return $app['twig']->render(
            'userdata/index.html.twig',
            ['userData' => $UserRepository->displayUserData($userLogin)]
        );
    }

    /**
     * Edit logged user data.
     * Displays filled form with current user data.
     *
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Doctrine\DBAL\DBALException
     */
    public function editData(Application $app,Request $request)
    {
        $userRepository = new UserRepository($app['db']);

        $userLogin = $app['security.token_storage']->getToken()->getUser()->getUsername();

        $userData = $userRepository->displayUserData($userLogin);

        $formFill = array_merge(
            $userData['userData'], $userData['phone'], $userData['adress']
        );


        $form = $app['form.factory']->createBuilder(EditDataType::class, $formFill)->getForm();
        //dump($formFill);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $userRepository->updateData($formData,$userLogin);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.user_data_successfully_edited',
                ]
            );

            return $app->redirect($app['url_generator']->generate('account_index'), 301);
        }

        return $app['twig']->render(
            'userdata/changeUserData.html.twig',
            [
                'tag' => $userData,
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * Edit login and password action.
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Doctrine\DBAL\DBALException
     */
    public function editPass(Application $app,Request $request)
    {
        $userRepository = new UserRepository($app['db']);

        $userLogin = $app['security.token_storage']->getToken()->getUser()->getUsername();

        $userData = $userRepository->displayUserData($userLogin);

        $formFill['login'] = $userData['login'];


        $form = $app['form.factory']->createBuilder(EditPassType::class, $formFill)->getForm();
        //dump($formFill);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $formData=$form->getData();
            $formData['password'] = $app['security.encoder.bcrypt']->encodePassword($formData['password'], '');
            $userRepository->updatePassData($formData,$userLogin);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.user_data_successfully_edited',
                ]
            );

            return $app->redirect($app['url_generator']->generate('account_index'), 301);
        }

        return $app['twig']->render(
            'userdata/changePass.html.twig',
            [
                'tag' => $userData,
                'form' => $form->createView(),
            ]
        );
    }





    /**
     * Delete action - delets user
     *
     * Deletes user from all tables
     *
     * @param Application $app
     */
    public function deleteUser(Application $app,Request $request)
    {
        $userRepository = new UserRepository($app['db']);

        $userLogin = $app['security.token_storage']->getToken()->getUser()->getUsername();

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
            'delete/delete.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }

}
