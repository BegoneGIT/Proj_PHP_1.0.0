<?php

/** Track controller.
 *
 * @copyright (c) 2018 Mateusz Bulat
 */



namespace Controller;

use Form\DeleteTrackType;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\TrackRepository;
use Repository\UserRepository;
use Form\TrackType;

/**
 * Class TrackContoller
 */

class TrackController implements ControllerProviderInterface
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
        $controller->get('/', [$this, 'indexAction'])->bind('track_index');
        $controller->get('/page/{page}', [$this, 'indexAction'])
            ->value('page', 1)
            ->bind('track_index_paginated');
        $controller->match('/{INDEKS}/add', [$this, 'addAction'])
            ->method('POST|GET')
            ->bind('track_add');
        $controller->match('/{trackID}/delete', [$this, 'deleteAction'])
            ->method('POST|GET')
            ->bind('track_delete');

        return $controller;
    }

    /**
     * Index action.
     * Lists parts tracked by current logged user
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */

    public function indexAction(Application $app, $page = 1)
    {
        $trackRepository = new TrackRepository($app['db']);

        $token = $app['security.token_storage']->getToken();
        $userLogin = $token->getUser();

        $userId = $trackRepository->findLoggedUserId($userLogin);

        return $app['twig']->render(
            'track/index.html.twig',
            ['paginator' => $trackRepository->findAllPaginated($page, $userId)]
        );
    }
    /**
     * Add action.
     * Adds part to tracked by current user.
     *
     * @param \Silex\Application                        $app     Silex application
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP Request
     * @param string $INDEKS used to chceck if part of this index exists
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    public function addAction(Application $app, Request $request, $INDEKS)
    {
        $track['updated_ID'] = $INDEKS;

        $form = $app['form.factory']->createBuilder(TrackType::class, $track)->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $TrackRepository = new TrackRepository($app['db']);
            $track = $form->getData();

            $token = $app['security.token_storage']->getToken();
            $track['uzytkownik_ID'] = $token->getUser()->getUsername();


            if(!$TrackRepository->partExists($track)){


                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'error',
                        'message' => 'message.part_does_not_exist',
                    ]
                );

                return $app->redirect($app['url_generator']->generate('track_index'), 301);
            }

            $TrackRepository->save($track);


            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.part_successfully_added',
                ]
            );


            return $app->redirect($app['url_generator']->generate('track_index'), 301);
        }

        return $app['twig']->render(
            'track/add.html.twig',
            [
                'track' => $track,
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * Delete from tracked action.
     * Deletes part based on its ID if current user tracks it.
     *
     * @param Application $app
     * @param Request $request
     * @param $trackID Id of tracked part
     * to be removed from tracked list.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Application $app, Request $request, $trackID)
    {
        $partData = new TrackRepository($app['db']);
        $userRepos = new UserRepository($app['db']);

        $token = $app['security.token_storage']->getToken()->getUser()->getUsername();


        $userID = $userRepos->findLoggedUserId($token);

        if( !$partData->userTracks($trackID,$userID)  ){

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'error',
                    'message' => 'message.this_part_is_not_tracked',
                ]
            );

            return $app->redirect($app['url_generator']->generate('track_index'), 301);
        }

        $form = $app['form.factory']->createBuilder(DeleteTrackType::class)->getForm();
        $form->handleRequest($request);

        $result = $partData->partInfo($trackID);

        if ($form->isSubmitted() && $form->isValid()){

            $partData->deleteTrack($trackID);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.part_successfully_deleted',
                ]
            );

            return $app->redirect($app['url_generator']->generate('track_index'), 301);
        }



        return $app['twig']->render(
            'delete/deleteTrack.html.twig',
            [
                'trackID' => $trackID,
                'partData' => $result[0],
                'form' => $form->createView(),
            ]
        );

    }

   }