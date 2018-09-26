<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrganeslimphoiquesController extends AbstractController
{
    /**
     * @Route("/organeslimphoiques", name="organeslimphoiques")
     */
    public function index()
    {
        return $this->render('organeslimphoiques/Homepage.html.twig', [
            'controller_name' => 'OrganeslimphoiquesController',
        ]);
    }
}
