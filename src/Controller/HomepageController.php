<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\DependencyInjection\Tests\Fixtures\factoryFunction;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\OrganRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        $organRepository = new OrganRepository();
        $organs = $organRepository->findAll();


        return $this->render('Homepage.html.twig', [
            'controller_name'   => 'HomepageController',
            'tittle'            => "Bienvenu sur OrganSales",
            'products'          => $organs
        ]);
    }


}
