<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\BrowserKit\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    #[Route('/features/save', name: 'save')]
    public function save(ManagerRegistry $doctrine){
        $entitymanager = $doctrine->getManager();
        $article = new  Article();
        $article->setNom('Python For beginner');
        $article->setDescription('This Book for beginners who want to develop skills in python langage .. ');
        $article-> setPrix(1000.0);

        $entitymanager->persist($article);
        $entitymanager->flush();

        return new Response('Article est créer avec id'. $article->getId());
    }
}