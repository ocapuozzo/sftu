<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Lucky extends AbstractController
{
  /**
   * @Route("/", methods={"GET"}, name="lucky_step_one")
   */
  public function numberAction()
  {
    $number = mt_rand(0, 100);

    return $this->render('lucky/number.html.twig', array(
      'number' => $number,
    ));
  }
}