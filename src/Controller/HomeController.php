<?php

namespace App\Controller;

use App\Repository\LanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(LanguageRepository $languageRepository): Response
    {

        $languages = $languageRepository->findAll();

        return $this->render('home/index.html.twig', [
            'languages' => $languages,
        ]);
    }


    #[Route('/language/{id}', name: 'language_details')]
    public function details(LanguageRepository $languageRepository, int $id): Response
    {
        $language = $languageRepository->find($id);

        if (!$language) {
            throw $this->createNotFoundException('Langue non trouvée.');
        }

        return $this->render('language/details.html.twig', [
            'language' => $language,
        ]);
    }
}
