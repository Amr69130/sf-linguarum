<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Famille Indo-européenne
        $protoIndoEuropean = new Language();
        $protoIndoEuropean->setName('Proto-Indo-Européen');
        $protoIndoEuropean->setDescription('Langue mère des langues indo-européennes.');
        $manager->persist($protoIndoEuropean);

        // Groupe Roman
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

        $italian = new Language();
        $italian->setName('Italien');
        $italian->setDescription('Langue romane parlée en Italie.');
        $italian->setParent($latin);
        $manager->persist($italian);

        $spanish = new Language();
        $spanish->setName('Espagnol');
        $spanish->setDescription('Langue romane parlée en Espagne et en Amérique Latine.');
        $spanish->setParent($latin);
        $manager->persist($spanish);

        $portuguese = new Language();
        $portuguese->setName('Portugais');
        $portuguese->setDescription('Langue romane parlée au Portugal et au Brésil.');
        $portuguese->setParent($latin);
        $manager->persist($portuguese);

        // Groupe Germanique
        $protoGermanic = new Language();
        $protoGermanic->setName('Proto-Germanique');
        $protoGermanic->setDescription('Langue ancestrale des langues germaniques.');
        $protoGermanic->setParent($protoIndoEuropean);
        $manager->persist($protoGermanic);

        $oldEnglish = new Language();
        $oldEnglish->setName('Vieil Anglais');
        $oldEnglish->setDescription('Ancêtre direct de l’anglais moderne.');
        $oldEnglish->setParent($protoGermanic);
        $manager->persist($oldEnglish);

        $modernEnglish = new Language();
        $modernEnglish->setName('Anglais Moderne');
        $modernEnglish->setDescription('Langue germanique parlée au Royaume-Uni, États-Unis, etc.');
        $modernEnglish->setParent($oldEnglish);
        $manager->persist($modernEnglish);

        $oldHighGerman = new Language();
        $oldHighGerman->setName('Vieux Haut Allemand');
        $oldHighGerman->setDescription('Ancêtre des dialectes allemands modernes.');
        $oldHighGerman->setParent($protoGermanic);
        $manager->persist($oldHighGerman);

        $german = new Language();
        $german->setName('Allemand');
        $german->setDescription('Langue germanique parlée en Allemagne, Autriche, Suisse.');
        $german->setParent($oldHighGerman);
        $manager->persist($german);

        $dutch = new Language();
        $dutch->setName('Néerlandais');
        $dutch->setDescription('Langue germanique parlée aux Pays-Bas et en Belgique.');
        $dutch->setParent($protoGermanic);
        $manager->persist($dutch);

        // Groupe Slave
        $protoSlavic = new Language();
        $protoSlavic->setName('Proto-Slave');
        $protoSlavic->setDescription('Langue ancestrale des langues slaves.');
        $protoSlavic->setParent($protoIndoEuropean);
        $manager->persist($protoSlavic);

        $russian = new Language();
        $russian->setName('Russe');
        $russian->setDescription('Langue slave orientale parlée en Russie.');
        $russian->setParent($protoSlavic);
        $manager->persist($russian);

        $polish = new Language();
        $polish->setName('Polonais');
        $polish->setDescription('Langue slave occidentale parlée en Pologne.');
        $polish->setParent($protoSlavic);
        $manager->persist($polish);

        $serbian = new Language();
        $serbian->setName('Serbe');
        $serbian->setDescription('Langue slave méridionale parlée en Serbie.');
        $serbian->setParent($protoSlavic);
        $manager->persist($serbian);

        // Groupe Indo-Iranien
        $protoIndoIranian = new Language();
        $protoIndoIranian->setName('Proto-Indo-Iranien');
        $protoIndoIranian->setDescription('Langue mère des langues indo-iraniennes (hindi, persan, pachtou).');
        $protoIndoIranian->setParent($protoIndoEuropean);
        $manager->persist($protoIndoIranian);

        $hindi = new Language();
        $hindi->setName('Hindi');
        $hindi->setDescription('Langue indo-aryenne parlée en Inde.');
        $hindi->setParent($protoIndoIranian);
        $manager->persist($hindi);

        $pashto = new Language();
        $pashto->setName('Pachtou');
        $pashto->setDescription('Langue iranienne parlée en Afghanistan et au Pakistan.');
        $pashto->setParent($protoIndoIranian);
        $manager->persist($pashto);

        // Groupe Grec
        $greek = new Language();
        $greek->setName('Grec Moderne');
        $greek->setDescription('Langue indo-européenne parlée en Grèce.');
        $greek->setParent($protoIndoEuropean);
        $manager->persist($greek);

        // Famille Sémitique (dans Afro-asiatique)
        $protoAfroAsiatic = new Language();
        $protoAfroAsiatic->setName('Proto-Afro-Asiatique');
        $protoAfroAsiatic->setDescription('Langue ancestrale des langues sémitiques, berbères, couchitiques, etc.');
        $manager->persist($protoAfroAsiatic);

        $protoSemitic = new Language();
        $protoSemitic->setName('Ancien Sémitique');
        $protoSemitic->setDescription('Langue mère des langues sémitiques.');
        $protoSemitic->setParent($protoAfroAsiatic);
        $manager->persist($protoSemitic);

        $aramaic = new Language();
        $aramaic->setName('Araméen');
        $aramaic->setDescription('Langue sémitique ancienne parlée au Moyen-Orient.');
        $aramaic->setParent($protoSemitic);
        $manager->persist($aramaic);

        $arabic = new Language();
        $arabic->setName('Arabe');
        $arabic->setDescription('Langue sémitique moderne parlée dans le monde arabe.');
        $arabic->setParent($protoSemitic);
        $manager->persist($arabic);

        $hebrew = new Language();
        $hebrew->setName('Hébreu');
        $hebrew->setDescription('Langue sémitique parlée en Israël.');
        $hebrew->setParent($protoSemitic);
        $manager->persist($hebrew);

        // Famille Sino-tibétaine
        $protoSinoTibetan = new Language();
        $protoSinoTibetan->setName('Proto-Sino-Tibétain');
        $protoSinoTibetan->setDescription('Langue ancestrale des langues sino-tibétaines.');
        $manager->persist($protoSinoTibetan);

        $mandarin = new Language();
        $mandarin->setName('Mandarin');
        $mandarin->setDescription('Langue sino-tibétaine parlée principalement en Chine.');
        $mandarin->setParent($protoSinoTibetan);
        $manager->persist($mandarin);

        $cantonese = new Language();
        $cantonese->setName('Cantonais');
        $cantonese->setDescription('Langue chinoise parlée dans le sud de la Chine.');
        $cantonese->setParent($protoSinoTibetan);
        $manager->persist($cantonese);

        $tibetan = new Language();
        $tibetan->setName('Tibétain');
        $tibetan->setDescription('Langue sino-tibétaine parlée au Tibet.');
        $tibetan->setParent($protoSinoTibetan);
        $manager->persist($tibetan);

        $manager->flush();
    }
}
