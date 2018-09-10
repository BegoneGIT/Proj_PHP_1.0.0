<?php
/**
 * Index controller.
 * Manages main page and links.
 *
 * @copyright (c) 2018 Mateusz Bulat
 */
namespace Controller;

use Repository\IndexRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

/**
 * Class IndexContoller
 */

class IndexController implements ControllerProviderInterface
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
        $controller->get('/', [$this, 'indexAction'])->bind('homepage');


        return $controller;
    }

    /**
     * Index action.
     * Lists current brands of parts.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */

    public function indexAction(Application $app)
    {
        $parts = new IndexRepository($app['db']);

        $companies = $parts->findAll();


        return $app['twig']->render(
            'index.html.twig',
            ['companies' => $companies]
        );
    }
}