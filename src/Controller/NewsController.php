<?php

namespace App\Controller;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function news(NewsRepository $news_rep)
    {
        $news = $news_rep->findAll();
        return $this->render('news/index.html.twig', [
            'all_news'=>$news
        ]);
    }
    /**
     * @Route("/newss")
     */
    public function news_by_id(NewsRepository $news_rep,Request $request)
    {

        $news = $news_rep->find(1);
        return $this->render('news/one_news.html.twig', [
            'news'=>$news
        ]);
    }
}
