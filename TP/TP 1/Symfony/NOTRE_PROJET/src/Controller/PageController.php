<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    // Route pour la page 1
    #[Route('/page1', name: 'app_page1')]
    public function page1(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 2
    #[Route('/page2', name: 'app_page2')]
    public function page2(): Response
    {
        return $this->render('page/présentation.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 3
    #[Route('/page3', name: 'app_page3')]
    public function page3(): Response
    {
        return $this->render('page/portfolio.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 4
    #[Route('/page4', name: 'app_page4')]
    public function page4(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
