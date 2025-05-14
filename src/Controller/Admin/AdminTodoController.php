<?php

namespace App\Controller\Admin;

use App\Repository\ProposedLanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminTodoController extends AbstractController
{
    #[Route('/admin/todo', name: 'admin_todo')]
    public function index(ProposedLanguageRepository $proposedLanguageRepository): Response
    {
        $approvedLanguages = $proposedLanguageRepository->findBy([
            'isApproved' => true
        ]);

        return $this->render('admin/admin_todo/index.html.twig', [
            'approvedLanguages' => $approvedLanguages,
        ]);
    }
}
