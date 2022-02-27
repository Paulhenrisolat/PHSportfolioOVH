<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RouteController extends AbstractController{

    /**
     * @Route("/", name="indexaccueil")
     */
    public function indexacceuil(): Response
    {
        return $this->render('vue/accueil.html.twig');
    }

	/**
     * @Route("/accueil", name="accueil")
     */
    public function acceuil(): Response
    {
        return $this->render('vue/accueil.html.twig');
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('vue/cv.html.twig');
    }

    /**
     * @Route("/veilleInfo", name="veilleInfo")
     */
    public function veilleInfo(): Response
    {
        return $this->render('vue/veilleInfo.html.twig');
    }

    /**
     * @Route("/stage/{id}", name="stage")
     */
    public function Stage(int $id): Response
    {
        if ($id == 1){
            return $this->render('vue/stage1.html.twig');
        }
        elseif ($id == 2){
            return $this->render('vue/stage2.html.twig');
        }
    }

    /**
     * @Route("/nolark", name="nolark")
     */
    public function nolark(): Response
    {
        return $this->render('vue/nolark.html.twig');
    }

    /**
     * @Route("/chocolatein", name="chocolatein")
     */
    public function chocolatein(): Response
    {
        return $this->render('vue/chocolatein.html.twig');
    }

    /**
     * @Route("/projetportfolio", name="projetportfolio")
     */
    public function projetportfolio(): Response
    {
        return $this->render('vue/projetportfolio.html.twig');
    }
}