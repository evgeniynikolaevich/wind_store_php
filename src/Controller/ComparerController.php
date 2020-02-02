<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ComparerController extends AbstractController
{
    /**
     * @Route("/comparer", name="comparer")
     */
    public function index()
    {
        return $this->render('comparer/index.html.twig', [
            'controller_name' => 'ComparerController',
        ]);
    }
}
