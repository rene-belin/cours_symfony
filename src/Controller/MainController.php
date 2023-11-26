<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // attribut Route
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        // rendu d'une page html, templates/main/index.html.twig
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
