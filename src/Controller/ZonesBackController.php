<?php

namespace App\Controller;

use App\Entity\Zones;
use App\Form\Zones1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/zones/back')]
class ZonesBackController extends AbstractController
{
    #[Route('/', name: 'app_zones_back_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $zones = $entityManager
            ->getRepository(Zones::class)
            ->findAll();

        return $this->render('zones_back/index.html.twig', [
            'zones' => $zones,
        ]);
    }

    #[Route('/new', name: 'app_zones_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $zone = new Zones();
        $form = $this->createForm(Zones1Type::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the uploads directory
                $imageFile->move(
                    $uploadsDirectory,
                    $newFilename
                );

                // Update the 'image' property of the zone entity with the filename
                $zone->setImage($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zone);
            $entityManager->flush();

            return $this->redirectToRoute('app_zones_back_index');
        }

        return $this->render('zones_back/new.html.twig', [
            'zone' => $zone,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{zoneId}', name: 'app_zones_back_show', methods: ['GET'])]
    public function show(Zones $zone): Response
    {
        return $this->render('zones_back/show.html.twig', [
            'zone' => $zone,
        ]);
    }

    #[Route('/{zoneId}/edit', name: 'app_zones_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Zones $zone, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Zones1Type::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                $imageFile->move(
                    $uploadsDirectory,
                    $newFilename
                );

                $zone->setImage($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_zones_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('zones_back/edit.html.twig', [
            'zone' => $zone,
            'form' => $form,
        ]);
    }

    #[Route('/{zoneId}', name: 'app_zones_back_delete', methods: ['POST'])]
    public function delete(Request $request, Zones $zone, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zone->getZoneId(), $request->request->get('_token'))) {
            $entityManager->remove($zone);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_zones_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
