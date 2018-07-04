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
}