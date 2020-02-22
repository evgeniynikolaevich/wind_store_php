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
            'main_title' => 'EURUS/Каталог',
            'title'=>'каталог',
            'generators' =>$gen,
            'services'=>$serv
        ]);
    }

    /**
     * @Route("/catalog/generators/{id}", name="generator_by_id")
     */
    public function getGeneratorFromCatalog(GeneratorRepository $generator, $id)
    {
        $gen = $generator->find($id);
        return $this->render('catalog/index.html.twig', [

            'title' => 'каталог',
            'generator' =>$gen,
        ]);
    }
    /**
     * @Route("/catalog/services/{id}", name="service by_id")
     */
    public function getServiceFromCatalog(GeneratorRepository $generator, $id)
    {
        $serv = $service->findid();
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
            'title' => 'каталог',
            'service'=>$serv
        ]);
    }
}
