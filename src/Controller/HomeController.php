<?php

namespace App\Controller;

use App\Repository\LanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; // Pour récupérer les données GET/POST
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, LanguageRepository $languageRepository): Response
    {
        $query = $request->query->get('q');

        if ($query) {

            $languages = $languageRepository->searchByNameOrDescription($query);
        } else {
            $languages = $languageRepository->findAll();
        }

        return $this->render('home/index.html.twig', [
            'languages' => $languages,
            'query' => $query,
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


