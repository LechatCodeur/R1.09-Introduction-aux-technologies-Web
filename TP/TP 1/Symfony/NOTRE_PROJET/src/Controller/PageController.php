<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    // Route pour la page 1 avec un paramètre _locale
    #[Route('/{_locale}/accueil', name: 'app_page1', requirements: ['_locale' => 'fr|en|la'])]
    public function accueil(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 2 avec un paramètre _locale
    #[Route('/{_locale}/présentation', name: 'app_page2', requirements: ['_locale' => 'fr|en|la'])]
    public function présentation(): Response
    {
        return $this->render('page/présentation.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 3 avec un paramètre _locale
    #[Route('/{_locale}/portfolio', name: 'app_page3', requirements: ['_locale' => 'fr|en|la'])]
    public function portfolio(): Response
    {
        return $this->render('page/portfolio.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 4 avec un paramètre _locale
    #[Route('/{_locale}/contact', name: 'app_page4', requirements: ['_locale' => 'fr|en|la'])]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    // Route pour la page 5 avec un paramètre _locale
    #[Route('/{_locale}/CV', name: 'app_page5', requirements: ['_locale' => 'fr|en|la'])]
    public function cv(): Response
    {
        return $this->render('page/cv.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
