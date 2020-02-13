<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;


class CartForController
{

  public function delete_from_cart()
  {
    $this->cart();

  }


  private function start_shopping()
  {
    $session = new Session();
    $session->start();
    // $session->set('name', 'Drak');
    // $session->get('name');
  }
  private function continue_shopping()
  {


  }



  public function cart_start()
  {


  }

  public function __construct()
  {
    //check if user has bought
      $this->cart_start();

  }


}




class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index()
    {
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
