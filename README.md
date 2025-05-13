#LINGUARUM
##APPLICATION SYMFONY EXPOSANT UN "ARBRE GENEALOGIQUE" DES LANGUES DU MONDES

TODO :
Parfait, on passe à la gestion des propositions côté administrateur. Voici un plan clair pour que l'admin puisse consulter, valider ou refuser les langues proposées :

✅ Étape 1 : Ajouter un champ isApproved dans ProposedLanguage
Cela permettra de marquer une proposition comme acceptée ou refusée.

bash
Copier
Modifier
php bin/console make:entity

# Entité : ProposedLanguage

# Nouveau champ : isApproved (type: boolean, nullable: yes)

Puis crée une migration :

bash
Copier
Modifier
php bin/console make:migration
php bin/console doctrine:migrations:migrate
✅ Étape 2 : Ajouter une section EasyAdmin pour ProposedLanguage
Dans src/Controller/Admin/ crée un CRUD avec :

bash
Copier
Modifier
php bin/console make:admin:crud ProposedLanguage
Cela génère automatiquement une interface pour que l'admin voie les propositions.

Tu peux ensuite modifier le fichier ProposedLanguageCrudController.php pour :

Afficher uniquement les propositions non encore approuvées.

Ajouter un bouton "Approuver".

✅ Étape 3 : Filtrer dans le Dashboard EasyAdmin
Dans DashboardController, ajoute un lien dans le menu admin :

php
Copier
Modifier
yield MenuItem::linkToCrud('Langues proposées', 'fas fa-language', ProposedLanguage::class);
Et pour filtrer uniquement les non approuvées dans le ProposedLanguageCrudController, surcharge la méthode createIndexQueryBuilder() :

php
Copier
Modifier
public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
{
    $qb = parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters);
$qb->andWhere('entity.isApproved IS NULL');
return $qb;
}
✅ Étape 4 : Permettre l’approbation dans l’interface
Dans configureFields(), autorise l’édition de isApproved :

php
Copier
Modifier
BooleanField::new('isApproved', 'Approuvé ?')
L’admin pourra ainsi cocher cette case pour valider une proposition.

Si tu veux qu’une langue validée soit automatiquement insérée dans ta table Language, je peux te guider sur une logique pour ça aussi (event listener ou manuel).

Tu veux qu’on fasse cette partie aussi ?
