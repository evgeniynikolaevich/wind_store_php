<?php

namespace App\Controller;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function index(NewsRepository $news_rep)
    {
        $news = $news_rep->findAll();
        return $this->render('news/index.html.twig', [
            'controller_name' => 'NewsController',
            'all_news'=>$news
        ]);
    }
    /**
     * @Route("/news/{id}", name="newsbyid")
     */
    public function news_by_id(NewsRepository $news_rep,$id)
    {
        $news = $news_rep->find($id);
        return $this->render('news/one_news.html.twig', [
            'controller_name' => 'NewsController',
            'news'=>$news
        ]);
    }
}
