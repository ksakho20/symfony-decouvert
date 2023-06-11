<?php

namespace App\Controller;


use App\Form\CalculatorType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalculatriceController extends AbstractController
{
    /**
     * @Route("/", name="app_calculatrice")
     */
    //https://sharemycode.fr/s62
   // https://sharemycode.fr/6pe
     public function index(Request $request): Response
    {
        //createForm permet de créer un formulaire
        $form = $this->createForm(CalculatorType::class);
        $form = $form->handleRequest($request);
        
        $nbr1 =0;
        $nbr2 = 0;
        $ope= "";
        $result = 0;
       

        if ($form->isSubmitted()) {
            $nbr1 = $form->get('number1')->getData();
            $nbr2 = $form->get('number2')->getData();
            $ope = $form->get('ope')->getData();
            $this->calculate($nbr1, $nbr2, $ope);
            
        }

    
        return $this->render('calculatrice/index.html.twig', [
            
            'calculatrice' => $form->createView(),
        ]);
    }

    function calculate($nbr1, $nbr2, $ope){
        switch($ope){
            case '+' :
                dd($nbr1 + $nbr2);
            break;
            case '-' :
                dd($nbr1 - $nbr2);
            break;
            case '*' :
                dd($nbr1 * $nbr2);
            break;
            case '/' :
                dd($nbr1 / $nbr2);
            break;


            }
    }
}
