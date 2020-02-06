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
        $generators = $rep->findAll();
        return $this->render('main/main.html.twig',['res'=>$number,'generators'=> $generators]);
    }
}
?>
