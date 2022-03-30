<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(){
        return $this->render('home/home.html.twig');
    }
    #[Route('/features', name: 'features')]
    public function features(){
        $article = ['article1' , 'article2' ,'article3'];
        return $this->render('features/features.html.twig', [
            'articles' => $article
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(){
        return $this->render('contact/contact.html.twig');
    }
}