<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request): Response
    {
        // cette ligne signifie que vous voulez créer un nouveau formulaire à partir de la classe ContactType ( qui contient les champs email et message)
        $form = $this->createForm(ContactType::class);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted()) {
            dd($form->get('email')->getData());
        }

        //dd(); permet de faire un var_dump et un die en même temps (dump and die) 
        // il affiche le contenu de la variable et arrête l'éxecution de la fonction
    
        

        return $this->render('contact/index.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }
}
