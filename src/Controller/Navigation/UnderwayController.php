<?php

namespace App\Controller\Navigation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UnderwayController extends AbstractController
{
    /**
     * @Route("/navigation/underway", name="navigation")
     */
    public function index()
    {
        return $this->render('navigation/index.html.twig', []);
    }
   

}
