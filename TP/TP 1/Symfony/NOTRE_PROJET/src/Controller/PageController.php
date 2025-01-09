<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
   
    #[Route('/home', name: 'app_page')]
    public function home(): Response
    {
        return $this->render('page/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/home2', name: 'app_page')]
    public function page2(): Response
    {
        return $this->render('page/page2.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
