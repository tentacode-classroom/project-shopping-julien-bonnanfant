<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\OrganRepository;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index($productId = null)
    {



        $organRepository = new OrganRepository();
        $organ = $organRepository->findOneById( (int) $productId);

        return $this->render('product.html.twig', [
            'product'=> $organ
        ]);
    }
}
