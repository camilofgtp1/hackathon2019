<?php

namespace App\Controller;

use App\Services\DataTransferObjects\NodeGeneratorInterface;
use App\Services\requestingPassengerDTOInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RequestingPassengerFindController extends AbstractController
    implements RequestingPassengerFindControllerInterface
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
     * @Route("/requesting/passengerFind", name="requesting_passenger_find")
     * @param requestingPassengerDTOInterface $dto
     * @return Response
     */
    public function index(requestingPassengerDTOInterface $dto)
    {
        return $this->render('requesting_passenger/find.html.twig', [
            'controller_name' => 'RequestingPassengerFindController',
            'dto' => $dto
        ]);
    }
}
