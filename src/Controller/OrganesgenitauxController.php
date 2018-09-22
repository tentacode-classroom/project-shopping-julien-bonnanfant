<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrganesgenitauxController extends AbstractController
{
    /**
     * @Route("/organesgenitaux", name="organesgenitaux")
     */
    public function index()
    {
        return $this->render('organesgenitaux/index.html.twig', [
            'controller_name' => 'OrganesgenitauxController',
        ]);
    }
}
