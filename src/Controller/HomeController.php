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
        return $this->render('features/features.html.twig');
    }
    #[Route('/contact', name: 'contact')]
    public function contact(){
        return $this->render('contact/contact.html.twig');
    }
}