<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrganescreuxController extends AbstractController
{
    /**
     * @Route("/organescreux", name="organescreux")
     */
    public function index()
    {
        return $this->render('organescreux/index.html.twig', [
            'controller_name' => 'OrganescreuxController',
        ]);
    }
}
