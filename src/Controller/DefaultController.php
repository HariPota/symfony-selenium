<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index", methods={"GET"})
     */
    public function index(){
        return $this->render('default/default.html.twig', []);
    }

    /**
     * @Route("/second", name="app_second", methods={"GET"})
     */
    public function secondPage(){
        return $this->render('default/second.html.twig', []);
    }
}