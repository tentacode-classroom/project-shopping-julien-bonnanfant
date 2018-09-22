<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrganesvitauxController extends AbstractController
{
    /**
     * @Route("/organesvitaux", name="organesvitaux")
     */
    public function index()
    {
        return $this->render('organesvitaux/index.html.twig', [
            'controller_name' => 'OrganesvitauxController',
        ]);
    }
}
