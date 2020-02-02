<?php 

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MainController extends AbstractController
{   
    /**
     * @Route("/", name="main")
     */

    public  function showAction()

    {
        $number = 1;
        return $this->render('main/main.html.twig',['res'=>$number]);   
    }
}
?>