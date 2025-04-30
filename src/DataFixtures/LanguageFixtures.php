<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $protoIndoEuropean = new Language();
        $protoIndoEuropean->setName('Proto-Indo-European');
        $protoIndoEuropean->setDescription('Langue mère des langues indo-européennes.');
        $manager->persist($protoIndoEuropean);

        $latin = new Language();
        $latin->setName('Latin');
        $latin->setDescription('Langue ancienne, ancêtre du français, espagnol, italien, etc.');
        $latin->setParent($protoIndoEuropean);
        $manager->persist($latin);

        $french = new Language();
        $french->setName('Français');
        $french->setDescription('Langue romane parlée en France, Belgique, Suisse, etc.');
        $french->setParent($latin);
        $manager->persist($french);

        $protoGermanic = new Language();
        $protoGermanic->setName('Proto-Germanique');
        $protoGermanic->setDescription('Langue ancestrale des langues germaniques (allemand, anglais, néerlandais, etc.)');
        $manager->persist($protoGermanic);

        $oldEnglish = new Language();
        $oldEnglish->setName('Vieil Anglais');
        $oldEnglish->setDescription("Ancêtre direct de l’anglais moderne.");
        $oldEnglish->setParent($protoGermanic);
        $manager->persist($oldEnglish);

        $oldHighGerman = new Language();
        $oldHighGerman->setName('Vieux Haut Allemand');
        $oldHighGerman->setDescription("Ancêtre des dialectes allemands modernes.");
        $oldHighGerman->setParent($protoGermanic);
        $manager->persist($oldHighGerman);

        $modernEnglish = new Language();
        $modernEnglish->setName('Anglais Moderne');
        $modernEnglish->setDescription("Langue germanique parlée principalement au Royaume-Uni, aux États-Unis, etc.");
        $modernEnglish->setParent($oldEnglish);
        $manager->persist($modernEnglish);

        $manager->flush();
    }
}
