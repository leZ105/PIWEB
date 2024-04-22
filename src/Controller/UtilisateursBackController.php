<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Form\Utilisateurs1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/utilisateurs/back')]
class UtilisateursBackController extends AbstractController
{
    #[Route('/', name: 'app_utilisateurs_back_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $utilisateurs = $entityManager
            ->getRepository(Utilisateurs::class)
            ->findAll();

        return $this->render('utilisateurs_back/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    #[Route('/{id}/block', name: 'app_utilisateurs_back_block', methods: ['GET'])]
    public function blockUser(Utilisateurs $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $utilisateur->setBlocked(true);
        $entityManager->flush();

        return $this->redirectToRoute('app_utilisateurs_back_index');
    }

    #[Route('/{id}/unblock', name: 'app_utilisateurs_back_unblock', methods: ['GET'])]
    public function unblockUser(Utilisateurs $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $utilisateur->setBlocked(false);
        $entityManager->flush();

        return $this->redirectToRoute('app_utilisateurs_back_index');
    }
    
    #[Route('/new', name: 'app_utilisateurs_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = new Utilisateurs();
        $form = $this->createForm(Utilisateurs1Type::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('upload_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle error
                }

                $utilisateur->setImage($newFilename);
            }
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('app_utilisateurs_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateurs_back/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateurs_back_show', methods: ['GET'])]
    public function show(Utilisateurs $utilisateur): Response
    {
        return $this->render('utilisateurs_back/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_utilisateurs_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateurs $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Utilisateurs1Type::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('upload_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle error
                }

                $utilisateur->setImage($newFilename);
            }
        
            $entityManager->flush();

            return $this->redirectToRoute('app_utilisateurs_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateurs_back/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateurs_back_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateurs $utilisateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_utilisateurs_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
