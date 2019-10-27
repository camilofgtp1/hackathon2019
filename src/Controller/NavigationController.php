<?php

namespace App\Controller;

use App\Services\DataTransferObjects\NodeGeneratorInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Node;
use App\Repository\NodeRepository;

class NavigationController extends AbstractController
{
    /**
     * @Route("/navigation/", name="navigation")
     */
    public function index()
    {
        return $this->render('navigation/index.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
   

}
