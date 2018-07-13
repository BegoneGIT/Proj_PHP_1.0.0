<?php
/**
 * Parts controller.
 *
 * @copyright (c) 2018 Mateusz Bulat
 */
namespace Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\PartsRepository;
use Form\SearchType;

/**
 * Class PartsContoller
 */

class PartsController implements ControllerProviderInterface
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
        $controller->get('/', [$this, 'indexAction'])->bind('parts_index');
        $controller->get('/page/{page}', [$this, 'indexAction'])
            ->value('page', 1)
            ->bind('parts_index_paginated');

        $controller->get('/{INDEKS}/search', [$this, 'searchAction'])
          //  ->method('POST|GET')
            ->bind('search_index');
        $controller->match('/{INDEKS}/search/page/{page}', [$this, 'searchAction'])
      //      ->method('POST|GET')
            ->value('page', 1)
            ->bind('parts_search_paginated');


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
        $partsRepository = new PartsRepository($app['db']);

        return $app['twig']->render(
            'parts/index.html.twig',
            ['paginator' => $partsRepository->findAllPaginated($page)]
        );
    }

    /**
     * Search action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */

    public function searchAction(Application $app, Request $request, $INDEKS, $page =1)
    {
        $search['INDEKS'] = $INDEKS;

        $form = $app['form.factory']->createBuilder(SearchType::class, $search)
            ->setMethod('GET')
            ->getForm();
        $form->handleRequest($request);

        $PartsRepository = new PartsRepository($app['db']);

        if ($form->isSubmitted() && $form->isValid()) {
          //  $PartsRepository = new PartsRepository($app['db']);
            $search = $form->getData();
        }

       /* return $app['twig']->render(
            'parts/search.html.twig',
            ['paginator' => $PartsRepository->searchPaginated($search, $page)]
        );*/

        return $app['twig']->render(
            'parts/search.html.twig',
            [
                'search' => $search,
                'form' => $form->createView(),
                'paginator' => $PartsRepository->searchPaginated($search,$page),
            ]
        );
    }
}