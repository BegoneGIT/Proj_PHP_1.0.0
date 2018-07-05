<?php

/** Account controller.
 *
 * Used to manage user data
 *
 * @copyright (c) 2018 Mateusz Bulat
 */



namespace Controller;

use Form\RegisterType;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\UserRepository;

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


        return $controller;
    }


    /**
     * Parts action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */

    public function indexAction(Application $app, $page = 1)
    {
        $UserRepository = new UserRepository($app['db']);

        $userLogin = $app['security.token_storage']->getToken()->getUser()->getUsername();
        $UserRepository->showAllUsers();

        return $app['twig']->render(
            'userdata/index.html.twig',
            ['userData' => $UserRepository->displayUserData($userLogin)]
        );
    }


    public function editData(Application $app,Request $request)
    {
        $userRepository = new UserRepository($app['db']);

        $userLogin = $app['security.token_storage']->getToken()->getUser()->getUsername();

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

            return $app->redirect($app['url_generator']->generate('account_index'), 301);
        }

        return $app['twig']->render(
            'register/register.html.twig',
            [
                'tag' => $userData,
                'form' => $form->createView(),
            ]
        );
    }
}
