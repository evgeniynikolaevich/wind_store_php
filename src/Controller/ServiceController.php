<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ServiceRepository;
class ServiceController extends AbstractController
{  /**
   * @Route("/servicess", name="service_by_id")
   */
  public function service_by_id(ServiceRepository $serv_rep)
  {
      $serv = $serv_rep->find(1);
      return $this->render('service/index.html.twig', [

          'title' => $serv->getTitle(),
          'service' =>$serv,
      ]);
  }
}
