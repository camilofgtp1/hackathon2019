<?php

namespace App\Controller\Planning;

use App\Services\requestingPassengerDTOInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScheduleControllerController extends AbstractController
    implements ScheduleControllerInterface
{
    /**
     * @Route("/planning/schedule", name="planning_schedule")
     * @param requestingPassengerDTOInterface $dto
     * @return Response
     */
    public function index(requestingPassengerDTOInterface $dto)
    {
        return $this->render('planning/index.html.twig', [
            'dto' => $dto
        ]);
    }
}
