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

        $protoBerber = new Language();
        $protoBerber->setName('Proto-Berbere');
        $protoBerber->setDescription('Langue ancestrale des langues berbères.');
        $protoBerber->setParent($protoAfroAsiatic);
        $manager->persist($protoBerber);

        $kabyle = new Language();
        $kabyle->setName('Kabyle');
        $kabyle->setDescription('Langue berbère parlée en Algérie.');
        $kabyle->setParent($protoBerber);
        $manager->persist($kabyle);

        $tachelhit = new Language();
        $tachelhit->setName('Tachelhit');
        $tachelhit->setDescription('Langue berbère parlée au Maroc.');
        $tachelhit->setParent($protoBerber);
        $manager->persist($tachelhit);

        $protoCushitic = new Language();
        $protoCushitic->setName('Proto-Couchitique');
        $protoCushitic->setDescription('Langue ancestrale des langues couchitiques.');
        $protoCushitic->setParent($protoAfroAsiatic);
        $manager->persist($protoCushitic);

        $somali = new Language();
        $somali->setName('Somali');
        $somali->setDescription('Langue couchitique parlée en Somalie.');
        $somali->setParent($protoCushitic);
        $manager->persist($somali);

        $afar = new Language();
        $afar->setName('Afar');
        $afar->setDescription('Langue couchitique parlée à Djibouti et en Éthiopie.');
        $afar->setParent($protoCushitic);
        $manager->persist($afar);

        $ancientEgyptian = new Language();
        $ancientEgyptian->setName('Égyptien Ancien');
        $ancientEgyptian->setDescription('Langue chamito-sémitique de l\'Égypte ancienne.');
        $ancientEgyptian->setParent($protoAfroAsiatic);
        $manager->persist($ancientEgyptian);

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

        $burmese = new Language();
        $burmese->setName('Birman');
        $burmese->setDescription('Langue tibéto-birmane parlée au Myanmar.');
        $burmese->setParent($protoSinoTibetan);
        $manager->persist($burmese);

        $dzongkha = new Language();
        $dzongkha->setName('Dzongkha');
        $dzongkha->setDescription('Langue tibéto-birmane parlée au Bhoutan.');
        $dzongkha->setParent($protoSinoTibetan);
        $manager->persist($dzongkha);

        $hakka = new Language();
        $hakka->setName('Hakka');
        $hakka->setDescription('Langue chinoise parlée en Chine du Sud.');
        $hakka->setParent($protoSinoTibetan);
        $manager->persist($hakka);

        $wu = new Language();
        $wu->setName('Wu');
        $wu->setDescription('Langue chinoise parlée autour de Shanghai.');
        $wu->setParent($protoSinoTibetan);
        $manager->persist($wu);

        $min = new Language();
        $min->setName('Min Nan');
        $min->setDescription('Langue chinoise du sud-est, parlée à Taïwan et Fujian.');
        $min->setParent($protoSinoTibetan);
        $manager->persist($min);

        // Famille Caucasienne
        $protoCaucasian = new Language();
        $protoCaucasian->setName('Proto-Caucasien');
        $protoCaucasian->setDescription('Langue hypothétique ancêtre des langues du Caucase.');
        $manager->persist($protoCaucasian);

        $northeastCaucasian = new Language();
        $northeastCaucasian->setName('Caucasien du Nord-Est');
        $northeastCaucasian->setDescription('Famille incluant les langues nakho-daghestaniennes.');
        $northeastCaucasian->setParent($protoCaucasian);
        $manager->persist($northeastCaucasian);

        $chechen = new Language();
        $chechen->setName('Tchétchène');
        $chechen->setDescription('Langue nakh parlée en Tchétchénie.');
        $chechen->setParent($northeastCaucasian);
        $manager->persist($chechen);

        $avar = new Language();
        $avar->setName('Avar');
        $avar->setDescription('Langue daghestanienne parlée au Daghestan.');
        $avar->setParent($northeastCaucasian);
        $manager->persist($avar);

        $northwestCaucasian = new Language();
        $northwestCaucasian->setName('Caucasien du Nord-Ouest');
        $northwestCaucasian->setDescription('Famille comprenant les langues abkhazo-adygéennes.');
        $northwestCaucasian->setParent($protoCaucasian);
        $manager->persist($northwestCaucasian);

        $abkhaz = new Language();
        $abkhaz->setName('Abkhaze');
        $abkhaz->setDescription('Langue caucasienne parlée en Abkhazie.');
        $abkhaz->setParent($northwestCaucasian);
        $manager->persist($abkhaz);

        $circassian = new Language();
        $circassian->setName('Tcherkesse');
        $circassian->setDescription('Langue nord-ouest caucasienne parlée au Caucase.');
        $circassian->setParent($northwestCaucasian);
        $manager->persist($circassian);

        $adyghe = new Language();
        $adyghe->setName('Adyghé');
        $adyghe->setDescription('Langue abkhazo-adygée parlée en Russie.');
        $adyghe->setParent($northwestCaucasian);
        $manager->persist($adyghe);

        $southCaucasian = new Language();
        $southCaucasian->setName('Caucasien du Sud (Kartvélien)');
        $southCaucasian->setDescription('Famille de langues comprenant le géorgien.');
        $southCaucasian->setParent($protoCaucasian);
        $manager->persist($southCaucasian);

        $georgian = new Language();
        $georgian->setName('Géorgien');
        $georgian->setDescription('Langue kartvélienne parlée en Géorgie.');
        $georgian->setParent($southCaucasian);
        $manager->persist($georgian);

        $mingrelian = new Language();
        $mingrelian->setName('Mingrélien');
        $mingrelian->setDescription('Langue kartvélienne parlée en Géorgie.');
        $mingrelian->setParent($southCaucasian);
        $manager->persist($mingrelian);

        $laz = new Language();
        $laz->setName('Laz');
        $laz->setDescription('Langue kartvélienne parlée sur la côte de la mer Noire.');
        $laz->setParent($southCaucasian);
        $manager->persist($laz);

        $manager->flush();
    }
}
