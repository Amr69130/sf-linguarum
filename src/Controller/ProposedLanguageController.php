<?php

namespace App\Controller;

use App\Entity\ProposedLanguage;
use App\Form\ProposedLanguageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProposedLanguageController extends AbstractController
{

    #[Route('/proposed-language/new', name: 'proposed_language_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérification que l'utilisateur est connecté
        if (!$this->getUser()) {
            $this->addFlash('error', 'Vous devez être connecté pour proposer une langue.');
            return $this->redirectToRoute('app_login');
        }

        $proposedLanguage = new ProposedLanguage();

        $form = $this->createForm(ProposedLanguageType::class, $proposedLanguage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proposedLanguage->setSubmittedAt(new \DateTimeImmutable());
            $proposedLanguage->setUser($this->getUser());

            $entityManager->persist($proposedLanguage);
            $entityManager->flush();

            $this->addFlash('success', 'Votre proposition de langue a été enregistrée avec succès !');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('proposed_language/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
