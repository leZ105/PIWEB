<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
  #[Route('/home', name: 'app_home')]
  public function index(): Response
  {
    return $this->render('home/index.html.twig', [
      'controller_name' => 'HomeController',
    ]);
  }

  #[Route('/back', name: 'app_homeBack')]
  public function indexBack(EntityManagerInterface $entityManager): Response
  {
      // Basic counts
      $reservationCount = $entityManager->createQuery('SELECT COUNT(r.idR) FROM App\Entity\Reservation r')->getSingleScalarResult();
      $zoneCount = $entityManager->createQuery('SELECT COUNT(z.zoneId) FROM App\Entity\Zones z')->getSingleScalarResult();
      $tableCount = $entityManager->createQuery('SELECT COUNT(t.tableId) FROM App\Entity\Tables t')->getSingleScalarResult();


      return $this->render('home/indexBack.html.twig', [
          'reservation_count' => $reservationCount,
          'zone_count' => $zoneCount,
          'table_count' => $tableCount,
      ]);
  }
}
