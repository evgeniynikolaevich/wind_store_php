<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GeneratorRepository;
use App\Repository\ServiceRepository;
class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index(GeneratorRepository $generator, ServiceRepository $service)
    {
        $gen = $generator->findAll();
        $serv = $service->findAll();
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
            'title' => 'каталог',
            'generators' =>$gen,
            'services'=>$serv
        ]);
    }
    public function for_catalog()
    {
        //from_base

    }

}
