<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    public function __construct(
        private readonly StarshipRepository $starshipRepository,
    ) {
    }

    #[Route('/')]
    public function homepage(): Response
    {
        $ships = $this->starshipRepository->findAll();
        $myShip = $ships[array_rand($ships)];

        return $this->render('main/homepage.html.twig', [
            'myShip' => $myShip,
            'ships' => $ships,
        ]);
    }
}
