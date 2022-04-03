<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtileController extends AbstractController
{
    #[Route('/artile', name: 'app_artile')]
    public function index(): Response
    {
        return $this->render('artile/index.html.twig', [
            'controller_name' => 'ArtileController',
        ]);
    }
}
