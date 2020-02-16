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

        ]);
    }
    /**
     * @Route("/delivery", name="delivery")
     */
    public function delivery()
    {
        return $this->render('simple_page/delivery.html.twig', [

        ]);
    }
    /**
     * @Route("/faq", name="faq")
     */
    public function faq()
    {
        return $this->render('simple_page/faq.html.twig', [

        ]);
    }
    /**
     * @Route("/carier", name="carier")
     */
    public function carier()
    {
        return $this->render('simple_page/carier.html.twig', [
            'controller_name' => 'SimplePageController',
        ]);
    }

}
