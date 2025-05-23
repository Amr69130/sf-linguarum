<?php

namespace App\Controller\Admin;

use App\Entity\Language;
use App\Entity\ProposedLanguage;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\HttpFoundation\RequestStack;

class LanguageCrudController extends AbstractCrudController
{
    private RequestStack $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public static function getEntityFqcn(): string
    {
        return Language::class;
    }

    public function createEntity(string $entityFqcn)
    {
        $language = new Language();

        $request = $this->requestStack->getCurrentRequest();
        $name = $request->query->get('name');
        $description = $request->query->get('description');

        if ($name) {
            $language->setName($name);
        }

        if ($description) {
            $language->setDescription($description);
        }

        return $language;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom'),
            TextareaField::new('description', 'Description'),
            AssociationField::new('parent', 'Langue parente')->autocomplete(),
        ];
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!$entityInstance instanceof Language)
            return;

        $request = $this->requestStack->getCurrentRequest();
        $proposedId = $request->query->get('proposedLanguageId');

        if ($proposedId) {
            $proposedLanguage = $entityManager->getRepository(ProposedLanguage::class)->find($proposedId);
            if ($proposedLanguage) {
                $proposedLanguage->setAddedToDatabase(true);
                $entityManager->persist($proposedLanguage);
            }
        }

        parent::persistEntity($entityManager, $entityInstance);
    }

}
