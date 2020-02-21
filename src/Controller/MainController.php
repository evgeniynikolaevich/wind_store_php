<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\GeneratorRepository;
use App\Repository\NewsRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */

    public  function showAction(GeneratorRepository $gen_repository, NewsRepository $news_repository)

    {
        $generators = $gen_repository->findAll();
        $news = $news_repository->findAll();
         return $this->render('main/main.html.twig',
         ['generators'=> array_slice($generators, 0 ,4),
         'all_news'=> array_slice($news, 0 ,4),
         "title" =>'главная',
         'main_title' => 'популярное']);
    }
}
?>
