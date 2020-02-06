<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SimplePageController extends AbstractController
{
    /**
     * @Route("/simple/page", name="simple_page")
     */
    public function index()
    {
        return $this->render('simple_page/index.html.twig', [
            'controller_name' => 'SimplePageController',
        ]);
    }
}
