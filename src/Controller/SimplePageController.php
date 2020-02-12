<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SimplePageController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('simple_page/about.html.twig', [
            'controller_name' => 'SimplePageController',
        ]);
    }
    /**
     * @Route("/contacts", name="contacts")
     */
    public function contacts()
    {
        return $this->render('simple_page/contacts.html.twig', [
            'controller_name' => 'SimplePageController',
        ]);
    }

}
