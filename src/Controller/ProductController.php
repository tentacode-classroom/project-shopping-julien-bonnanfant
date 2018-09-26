<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/123", name="product")
     */
    public function index()
    {



        $organRepository = new OrganRepository();
        $organ = $organRepository->findOneById($productId);

        return $this->render('product/Homepage.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
