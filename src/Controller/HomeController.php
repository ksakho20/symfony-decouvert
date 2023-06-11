<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * la route definie ici est la route par defaut de l'application ex "/" appel la méthode index
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
    

        //rendre() permet de renvoyer ube vue affichée du contenu html
        return $this->render('home/index.html.twig', [
            
        ]);
    }
}
