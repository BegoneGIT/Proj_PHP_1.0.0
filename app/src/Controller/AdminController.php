<?php
/**
 * Admin controller.
 *
 * @copyright (c) 2018 Mateusz Bulat
 */
namespace Controller;

use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\PartsRepository;
use Form\RegisterType;

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

}