<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {

        return new Response('<html><body><h1>Lucky number</h1></body></html>');

    }
}
