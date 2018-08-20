<?php
/**
 * Auth controller.
 *
 */
namespace Controller;


use Form\RegisterType;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\UserRepository;

/**
 * Class RegisterController.
 */
class RegisterController implements ControllerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'registerAction'])
            //->match('register', [$this, 'registerAction'])
            ->method('GET|POST')
            ->bind('register');

        return $controller;
    }

    /**
     * Register action.
     *
     * @param \Silex\Application                        $app     Silex application
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP Request
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    public function registerAction(Application $app, Request $request)
    {
        $register = [];

        $form = $app['form.factory']->createBuilder(RegisterType::class, $register)->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $UserRepository = new UserRepository($app['db']);
            $register = $form->getData();
            $register['password'] = $app['security.encoder.bcrypt']->encodePassword($register['password'], '');
            $UserRepository->register($register);

            if($register) {
                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.registration_complete',
                    ]
                );

                return $app->redirect($app['url_generator']->generate('homepage'), 301);
            }else{
                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'error',
                        'message' => 'message.registration_error',
                    ]
                );

                return $app->redirect($app['url_generator']->generate('homepage'), 301);
            }
        }

        return $app['twig']->render(
            'register/register.html.twig',
            [
                'register' => $register,
                'form' => $form->createView(),
            ]
        );
    }

}