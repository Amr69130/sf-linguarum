<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création des langues de base (par exemple, le Proto-Indo-Européen)
        $protoIndoEuropean = new Language();
        $protoIndoEuropean->setName('Proto-Indo-European');
        $protoIndoEuropean->setDescription('Langue mère des langues indo-européennes.');

        $manager->persist($protoIndoEuropean);

        // Création du Latin, enfant du Proto-Indo-Européen
        $latin = new Language();
        $latin->setName('Latin');
        $latin->setDescription('Langue ancienne, ancêtre du français, espagnol, italien, etc.');
        $latin->setParent($protoIndoEuropean);

        $manager->persist($latin);

        // Création du Français, enfant du Latin
        $french = new Language();
        $french->setName('Français');
        $french->setDescription('Langue romane parlée en France, Belgique, Suisse, etc.');
        $french->setParent($latin);

        $manager->persist($french);

        // Sauvegarder les objets dans la base de données
        $manager->flush();
    }
}
