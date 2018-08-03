<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Provider\WorkProvider;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class WorkController extends Controller
{
    private $provider;
    private $twig;

    public function __construct(WorkProvider $provider, \Twig_Environment $twig)
    {
        $this->provider = $provider;
        $this->twig = $twig;

    }

    public function listWorks()
    {
        return new Response(
            $this->twig->render(
            'work/listworks.html.twig', 
            ['works' => $this->provider->provideWork() ]
            )
        );
    }
    public function workDetail(Request $request)
    {
        $id = $request->query->get('id');

        if(!$id) {
            throw new NotFoundHttpException();
        }
        $tasks = $this->provider->provideWork();
        if(!isset($tasks[$id])){
            throw new NotFoundHttpException();
        }
        return new Response(
            $this->twig->render(
            'work/workdetail.html.twig', 
            ['work' => $this->provider->provideWork()[$id] ]
            )
        );
    }





}