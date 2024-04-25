<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\Reservation1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation/back')]
class ReservationBackController extends AbstractController
{
    #[Route('/', name: 'app_reservation_back_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager
            ->getRepository(Reservation::class)
            ->findAll();

        return $this->render('reservation_back/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/{idR}/change-status/{status}', name: 'app_reservation_back_change_status', methods: ['GET'])]
    public function changeStatus(int $idR, string $status, EntityManagerInterface $entityManager): Response
    {
        $reservation = $entityManager->getRepository(Reservation::class)->find($idR);
    
        if (!$reservation) {
            return new Response(['message' => 'Reservation not found'], Response::HTTP_NOT_FOUND);
        }
    
        $reservation->setStatus($status);
        $entityManager->flush();
    
        return $this->redirectToRoute('app_reservation_back_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/new', name: 'app_reservation_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_back/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{idR}', name: 'app_reservation_back_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation_back/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{idR}/edit', name: 'app_reservation_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_back/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{idR}', name: 'app_reservation_back_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdR(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
