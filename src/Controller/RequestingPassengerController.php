<?php

namespace App\Controller;

use App\Services\DataTransferObjects\NodeGeneratorInterface;
use App\Services\requestingPassengerDTOInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RequestingPassengerController extends AbstractController
    implements RequestingPassengerControllerInterface
{

    /**
     * @var NodeGeneratorInterface
     */
    private $nodeGenerator;

    public function __construct(NodeGeneratorInterface $nodeGenerator)
    {
        $this->nodeGenerator = $nodeGenerator;
    }

    /**
     * @Route("/requesting/passenger", name="requesting_passenger")
     * @param requestingPassengerDTOInterface $dto
     * @return Response
     */
    public function index(requestingPassengerDTOInterface $dto)
    {
        return $this->render('requesting_passenger/index.html.twig', [
            'controller_name' => 'RequestingPassengerController',
            'dto' => $dto
        ]);
    }
}
