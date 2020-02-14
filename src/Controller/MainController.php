<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\GeneratorRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */

    public  function showAction(GeneratorRepository $repository, SessionInterface $session, Request $request)

    {
          $generators = $repository->findAll();
        return $this->render('main/main.html.twig',['generators'=>$generators,"title" =>'главная',
         'main_title' => 'популярное']);
    }
}
?>
