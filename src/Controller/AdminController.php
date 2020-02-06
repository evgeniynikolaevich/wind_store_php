<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\WindGenerator;
use App\Repository\WindGeneratorRepository;
use Doctrine\ORM\EntityManagerInterface;

class AdminController extends AbstractController
{
    /**
     * @Route("/admins", name="admin")
     */

    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admins/add_generator", name="add_generator",methods = "GET")
     */

    public function add_generator(Request $request)
    {

      $generator = new WindGenerator();
      $name = $request->get('name');
      $voltage = $request->get('voltage');
      $power = $request->get('power');
      $type = $request->get('type');
      $discription = $request->get('discription');
      $generator->setGeneratorName($name);
      $generator->setPower($power);
      $generator->setVoltage($voltage);
      $generator->setType($type);
      $generator->setDiscription($discription);

      $entity_manager = $this->getDoctrine()->getManager();
      $entity_manager->persist($generator);
      $entity_manager->flush();


        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
