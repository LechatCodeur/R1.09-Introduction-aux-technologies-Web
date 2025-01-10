<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    // Route pour la page 1
    #[Route('/accueil', name: 'app_page1')]
    public function accueil(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 2
    #[Route('/présentation', name: 'app_page2')]
    public function présentation(): Response
    {
        return $this->render('page/présentation.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 3
    #[Route('/portfolio', name: 'app_page3')]
    public function portfolio(): Response
    {
        return $this->render('page/portfolio.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 4
    #[Route('/contact', name: 'app_page4')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
