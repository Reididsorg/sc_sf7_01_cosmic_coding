<?php
namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger, StarshipRepository $starshipRepository): Response
    {

        $logger->info('Starship collection retrieved');

        $starships = $starshipRepository->findAll();

        return $this->json($starships);
    }
}
