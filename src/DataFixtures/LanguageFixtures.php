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

        // Famille Afro-asiatique
        $protoAfroAsiatic = new Language();
        $protoAfroAsiatic->setName('Proto-Afro-Asiatique');
        $protoAfroAsiatic->setDescription("Langue ancestrale des langues sémitiques, berbères, couchitiques, etc.");
        $manager->persist($protoAfroAsiatic);

        $arabic = new Language();
        $arabic->setName('Arabe');
        $arabic->setDescription("Langue sémitique parlée dans le monde arabe.");
        $arabic->setParent($protoAfroAsiatic);
        $manager->persist($arabic);

        $hebrew = new Language();
        $hebrew->setName('Hébreu');
        $hebrew->setDescription("Langue sémitique parlée en Israël.");
        $hebrew->setParent($protoAfroAsiatic);
        $manager->persist($hebrew);

        $berber = new Language();
        $berber->setName('Berbère');
        $berber->setDescription("Groupe de langues afro-asiatiques parlées en Afrique du Nord (Tamazight, Kabyle, etc.).");
        $berber->setParent($protoAfroAsiatic);
        $manager->persist($berber);

        // Famille Sino-tibétaine
        $protoSinoTibetan = new Language();
        $protoSinoTibetan->setName('Proto-Sino-Tibétain');
        $protoSinoTibetan->setDescription("Langue ancestrale des langues sino-tibétaines.");
        $manager->persist($protoSinoTibetan);

        $mandarin = new Language();
        $mandarin->setName('Mandarin');
        $mandarin->setDescription("Langue sino-tibétaine parlée principalement en Chine.");
        $mandarin->setParent($protoSinoTibetan);
        $manager->persist($mandarin);

        $tibetan = new Language();
        $tibetan->setName('Tibétain');
        $tibetan->setDescription("Langue sino-tibétaine parlée au Tibet.");
        $tibetan->setParent($protoSinoTibetan);
        $manager->persist($tibetan);

        // Famille Niger-Congo
        $protoNigerCongo = new Language();
        $protoNigerCongo->setName('Proto-Niger-Congo');
        $protoNigerCongo->setDescription("Langue ancestrale des langues Niger-Congo.");
        $manager->persist($protoNigerCongo);

        $swahili = new Language();
        $swahili->setName('Swahili');
        $swahili->setDescription("Langue bantu parlée en Afrique de l’Est.");
        $swahili->setParent($protoNigerCongo);
        $manager->persist($swahili);

        $yoruba = new Language();
        $yoruba->setName('Yoruba');
        $yoruba->setDescription("Langue nigéro-congolaise parlée principalement au Nigéria.");
        $yoruba->setParent($protoNigerCongo);
        $manager->persist($yoruba);

        // Famille Altaïque
        $protoAltaic = new Language();
        $protoAltaic->setName('Proto-Altaïque');
        $protoAltaic->setDescription("Langue ancestrale des langues altaïques (turc, mongol, etc.).");
        $manager->persist($protoAltaic);

        $turkish = new Language();
        $turkish->setName('Turc');
        $turkish->setDescription("Langue altaïque parlée en Turquie.");
        $turkish->setParent($protoAltaic);
        $manager->persist($turkish);

        $mongolian = new Language();
        $mongolian->setName('Mongol');
        $mongolian->setDescription("Langue altaïque parlée en Mongolie.");
        $mongolian->setParent($protoAltaic);
        $manager->persist($mongolian);

        $manager->flush();
    }
}
