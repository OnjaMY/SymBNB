<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * Montre la page qui dit Bonjour
     * @Route("/hello/{prenom}/{age}", name="hello")
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     */

    public function hello($prenom="anonyme", $age=0){
       // return new Response("Bonjour ".$prenom." vous avez ".$age." ans");
        return $this->render('hello.html.twig',[
            'prenom'=>$prenom,
            'age'=>$age,

        ]
        );
    }
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'title'=> 'Coucou je suis une variable de twig',
            'age'=>2
        ]);
    }
}
