<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdresssController extends AbstractController
{
    /**
     * @Route("/adresss", name="app_adresss")
     */
    public function index(): Response
    {
        return $this->render('adresss/index.html.twig', [
            'controller_name' => 'AdresssController',
        ]);
    }
}
