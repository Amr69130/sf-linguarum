<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProposedLanguageController extends AbstractController
{
    #[Route('/proposed/language', name: 'app_proposed_language')]
    public function index(): Response
    {
        return $this->render('proposed_language/index.html.twig', [
            'controller_name' => 'ProposedLanguageController',
        ]);
    }
}
