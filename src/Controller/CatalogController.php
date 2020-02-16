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

    /**
     * @Route("/catalog/generator/{id}", name="catalog_by_id")
     */
    public function getGeneratorFromCatalog(GeneratorRepository $generator, ServiceRepository $service)
    {
        $gen = $generator->find($id);
        return $this->render('catalog/index.html.twig', [

            'title' => 'каталог',
            'generator' =>$gen,
        ]);
    }
    /**
     * @Route("/catalog/service/{id}", name="service by_id")
     */
    public function getServiceFromCatalog(GeneratorRepository $generator, ServiceRepository $service)
    {
        $serv = $service->findid();
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
            'title' => 'каталог',
            'service'=>$serv
        ]);
    }
}
