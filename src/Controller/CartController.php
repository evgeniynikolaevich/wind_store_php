<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Generator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use App\Repository\GeneratorRepository;




class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(SessionInterface $session, GeneratorRepository $generator )
      {
        $generators_is_cart = array();
      if($session->get('cart')){
        $all_id_in_cart = $session->get('cart');
        $generators_is_cart = array();
        foreach ($all_id_in_cart as $id) {
          $gen = $generator->find($id);
          array_push($generators_is_cart,$gen);
        }
        }
        return $this->render('cart/index.html.twig', [
            'title' =>'Корзина',
            'in_cart'=> $generators_is_cart
        ]);
    }

    /**
     * @Route("/add_to_cart/{id}", name="add_to_cart")
     */


    public function add_to_cart(Request $request, $id)

    { #get generator by id
      #push to session user this stuff
      #redirect to cart
      $sessionCart = $request->getSession();
       $cart = $sessionCart->get('cart');
       $cart[] = $id;
       $sessionCart->set('cart', $cart);
      return $this->redirectToRoute('cart');
    }
      /**
       * @Route("/remove_from_cart/{id}", name="remove_from_cart")
       */
    public function remove_from_cart($id, Request $request)
    {
      $sessionCart = $request->getSession();
       $cart = $sessionCart->get('cart');
       $remove_id = array_search($id,$cart);
       unset($cart[$remove_id]);
       $sessionCart->set('cart', $cart);
      return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/suc")
     */
    public function success(Request $request)
      {
        return $this->render('cart/success.html.twig', [
            'title' =>'Успешная покупка',
            'info'=> 'Ваша информация передана специалистам.С вами свяжутся уточнения предоставленной вами информации'
        ]);
    }




}
