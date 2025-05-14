<?php

namespace App\Controller\Admin;

use App\Entity\ProposedLanguage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ProposedLanguageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProposedLanguage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name', 'Nom de la langue'),
            TextareaField::new('description', 'Description'),
            DateTimeField::new('submittedAt', 'Date de soumission')->hideOnForm(),

            AssociationField::new('user', 'Utilisateur')->autocomplete(),
            BooleanField::new('isApproved', 'Approuvée ?'),
        ];
    }
}
