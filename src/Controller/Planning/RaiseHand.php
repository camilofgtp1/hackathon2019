<?php

namespace App\Controller\Planning;

use App\Services\requestingPassengerDTOInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaiseHand extends AbstractController
    implements RaiseHandInterface
{
    /**
     * @Route("/planning/raise/hand", name="planning_raise_hand")
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
