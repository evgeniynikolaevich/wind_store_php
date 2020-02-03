<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index()
    {
        $content = [
            'power'=> 380,

        ];


        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
            'title' => 'каталог',
            'content' =>$content
        ]);
    }
    public function for_catalog()
    {
        //from_base
        
    }
}
