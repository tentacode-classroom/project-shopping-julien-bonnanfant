<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\DependencyInjection\Tests\Fixtures\factoryFunction;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Organ;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {


        $product = $this->getDoctrine()
            ->getRepository(Organ::class)
            ->findall();



        return $this->render('Homepage.html.twig', [
            'tittle'            => "Bienvenu sur OrganSales",
            'products'          => $product
        ]);
    }


}
