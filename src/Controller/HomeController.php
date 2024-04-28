<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use App\Repository\CategorieMenuRepository;
use App\Repository\LikeUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    public function indexBack(
        PlatRepository $platRepository,
        CategorieMenuRepository $categorieMenuRepository,
        LikeUserRepository $likeUserRepository
    ): Response
    {
        // Get stats from various entities
        $totalPlats = count($platRepository->findAll());
        $totalCategories = count($categorieMenuRepository->findAll());
        $totalLikes = count($likeUserRepository->findAll());

        return $this->render('home/indexBack.html.twig', [
            'controller_name' => 'HomeController',
            'total_plats' => $totalPlats,
            'total_categories' => $totalCategories,
            'total_likes' => $totalLikes,
        ]);
    }
}
