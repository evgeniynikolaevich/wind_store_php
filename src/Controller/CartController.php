<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Generator;
use Symfony\Component\HttpFoundation\Request;
/*
class CartForController
{
  private $session;

  public function delete_from_cart(Sea)
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
    $user_session_id = 1;
    $this->session = $user_session_id;

  }



  public function cart_start()
  {
    if(!user->session)
    {
      $this->start_shopping();
    }
  }

  public function __construct()
  {
    //check if user has bought
    //return session

      $this->current_user = 1#db manipulation check user session
      $this->cart_start();

  }


}

*/


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
    /**
     * @Route("/cart/", name="add_to_cart",methods ="POST")
     */
    public function add_to_cart(int $id)
    { #get generator by id
      #push to session user this stuff
      #redirect to cart

        return $this->render('cart/index.html.twig', [
            'title' => 'Корзина',
            'controller_name' => 'CartController',
            'is' => $id
        ]);
    }
}
