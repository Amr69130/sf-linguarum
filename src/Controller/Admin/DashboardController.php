<?php

namespace App\Controller\Admin;

use App\Entity\Language;
use App\Entity\ProposedLanguage;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(LanguageCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sf Linguarum');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Languages', 'fas fa-language', Language::class);
        yield MenuItem::linkToCrud('Proposed Languages', 'fas fa-language', ProposedLanguage::class);
        yield MenuItem::linkToUrl('To-Do List', 'fas fa-arrow-left', $this->generateUrl('admin_todo'));
        yield MenuItem::linkToUrl('Return Home', 'fas fa-arrow-left', $this->generateUrl('app_home'));


    }
}
