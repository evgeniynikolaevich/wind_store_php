<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use App\Repository\WindGeneratorRepository;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */

    public  function showAction(WindGeneratorRepository $rep)

    {

        $number = 1;
        return $this->render('main/main.html.twig',['res'=>$number,]);
    }
}
?>
