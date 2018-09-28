<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Organ;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index($productId = null)
    {



        $product = $this->getDoctrine()
            ->getRepository(Organ::class)
            ->find($productId);

        return $this->render('product.html.twig', [
            'product'=> $product
        ]);
    }
}
