<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post/hello-world")
     */
    public function showPost(Request $request): Response
    {
        return $this->render('base.html.twig', [
            'test' => 'Hello World',
        ]);
    }
}
