<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // ---------------------------
        // Famille Indo-européenne
        // ---------------------------

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

        $eastSlavic = new Language();
        $eastSlavic->setName('Slave orientale');
        $eastSlavic->setDescription('Sous-groupe des langues slaves de l’est.');
        $eastSlavic->setParent($protoSlavic);
        $manager->persist($eastSlavic);

        $russian = new Language();
        $russian->setName('Russe');
        $russian->setDescription('Langue slave orientale parlée en Russie.');
        $russian->setParent($eastSlavic);
        $manager->persist($russian);

        $ukrainian = new Language();
        $ukrainian->setName('Ukrainien');
        $ukrainian->setDescription('Langue slave orientale parlée en Ukraine.');
        $ukrainian->setParent($eastSlavic);
        $manager->persist($ukrainian);

        $belarusian = new Language();
        $belarusian->setName('Biélorusse');
        $belarusian->setDescription('Langue slave orientale parlée au Bélarus.');
        $belarusian->setParent($eastSlavic);
        $manager->persist($belarusian);

        $westSlavic = new Language();
        $westSlavic->setName('Slave occidentale');
        $westSlavic->setDescription('Sous-groupe des langues slaves de l’ouest.');
        $westSlavic->setParent($protoSlavic);
        $manager->persist($westSlavic);

        $polish = new Language();
        $polish->setName('Polonais');
        $polish->setDescription('Langue slave occidentale parlée en Pologne.');
        $polish->setParent($westSlavic);
        $manager->persist($polish);

        $czech = new Language();
        $czech->setName('Tchèque');
        $czech->setDescription('Langue slave occidentale parlée en Tchéquie.');
        $czech->setParent($westSlavic);
        $manager->persist($czech);

        $slovak = new Language();
        $slovak->setName('Slovaque');
        $slovak->setDescription('Langue slave occidentale parlée en Slovaquie.');
        $slovak->setParent($westSlavic);
        $manager->persist($slovak);

        $southSlavic = new Language();
        $southSlavic->setName('Slave méridionale');
        $southSlavic->setDescription('Sous-groupe des langues slaves du sud.');
        $southSlavic->setParent($protoSlavic);
        $manager->persist($southSlavic);

        $serbian = new Language();
        $serbian->setName('Serbe');
        $serbian->setDescription('Langue slave méridionale parlée en Serbie.');
        $serbian->setParent($southSlavic);
        $manager->persist($serbian);

        $bulgarian = new Language();
        $bulgarian->setName('Bulgare');
        $bulgarian->setDescription('Langue slave méridionale parlée en Bulgarie.');
        $bulgarian->setParent($southSlavic);
        $manager->persist($bulgarian);

        $slovenian = new Language();
        $slovenian->setName('Slovène');
        $slovenian->setDescription('Langue slave méridionale parlée en Slovénie.');
        $slovenian->setParent($southSlavic);
        $manager->persist($slovenian);

        // Indo-Iranien
        $protoIndoIranian = new Language();
        $protoIndoIranian->setName('Proto-Indo-Iranien');
        $protoIndoIranian->setDescription('Langue mère des langues indo-iraniennes.');
        $protoIndoIranian->setParent($protoIndoEuropean);
        $manager->persist($protoIndoIranian);

        $sanskrit = new Language();
        $sanskrit->setName('Sanskrit');
        $sanskrit->setDescription('Langue classique de l\'Inde, ancêtre de nombreuses langues indo-aryennes.');
        $sanskrit->setParent($protoIndoIranian);
        $manager->persist($sanskrit);

        $hindi = new Language();
        $hindi->setName('Hindi');
        $hindi->setDescription('Langue indo-aryenne moderne parlée en Inde.');
        $hindi->setParent($sanskrit);
        $manager->persist($hindi);

        $urdu = new Language();
        $urdu->setName('Ourdou');
        $urdu->setDescription('Langue proche du hindi, parlée au Pakistan.');
        $urdu->setParent($sanskrit);
        $manager->persist($urdu);

        $avestan = new Language();
        $avestan->setName('Avestique');
        $avestan->setDescription('Langue ancienne d\'Iran, liée au zoroastrisme.');
        $avestan->setParent($protoIndoIranian);
        $manager->persist($avestan);

        $persian = new Language();
        $persian->setName('Persan');
        $persian->setDescription('Langue iranienne parlée en Iran.');
        $persian->setParent($avestan);
        $manager->persist($persian);

        $pashto = new Language();
        $pashto->setName('Pachtou');
        $pashto->setDescription('Langue iranienne parlée en Afghanistan et au Pakistan.');
        $pashto->setParent($avestan);
        $manager->persist($pashto);

        // ---------------------------
        // Famille Sino-tibétaine
        // ---------------------------

        // ---------------------------
// Famille Sino-tibétaine
// ---------------------------

        $protoSinoTibetan = new Language();
        $protoSinoTibetan->setName('Proto-Sino-Tibétain');
        $protoSinoTibetan->setDescription('Langue ancestrale des langues sino-tibétaines.');
        $manager->persist($protoSinoTibetan);

        $sinitic = new Language();
        $sinitic->setName('Langues sinitiques');
        $sinitic->setDescription('Langues chinoises, branche majeure des sino-tibétaines.');
        $sinitic->setParent($protoSinoTibetan);
        $manager->persist($sinitic);

        $mandarin = new Language();
        $mandarin->setName('Mandarin');
        $mandarin->setDescription('Langue sinitique la plus parlée, langue officielle de la Chine.');
        $mandarin->setParent($sinitic);
        $manager->persist($mandarin);

        $cantonese = new Language();
        $cantonese->setName('Cantonais');
        $cantonese->setDescription('Langue sinitique parlée dans le sud de la Chine et Hong Kong.');
        $cantonese->setParent($sinitic);
        $manager->persist($cantonese);

        $wu = new Language();
        $wu->setName('Wu');
        $wu->setDescription('Dialecte chinois parlé notamment à Shanghai.');
        $wu->setParent($sinitic);
        $manager->persist($wu);

        $minNan = new Language();
        $minNan->setName('Min Nan');
        $minNan->setDescription('Dialecte chinois parlé dans le sud-est, Taiwan.');
        $minNan->setParent($sinitic);
        $manager->persist($minNan);

        $tibetoBurman = new Language();
        $tibetoBurman->setName('Langues tibéto-birmanes');
        $tibetoBurman->setDescription('Sous-groupe majeur des sino-tibétaines.');
        $tibetoBurman->setParent($protoSinoTibetan);
        $manager->persist($tibetoBurman);

        $tibetan = new Language();
        $tibetan->setName('Tibétain');
        $tibetan->setDescription('Langue tibéto-birmane parlée au Tibet.');
        $tibetan->setParent($tibetoBurman);
        $manager->persist($tibetan);

        $dzongkha = new Language();
        $dzongkha->setName('Dzongkha');
        $dzongkha->setDescription('Langue tibéto-birmane officielle au Bhoutan.');
        $dzongkha->setParent($tibetoBurman);
        $manager->persist($dzongkha);

        $burmese = new Language();
        $burmese->setName('Birman');
        $burmese->setDescription('Langue tibéto-birmane parlée en Birmanie (Myanmar).');
        $burmese->setParent($tibetoBurman);
        $manager->persist($burmese);

        $naga = new Language();
        $naga->setName('Langues naga');
        $naga->setDescription('Groupe de langues tibéto-birmanes parlées en Inde (Nagaland) et Birmanie.');
        $naga->setParent($tibetoBurman);
        $manager->persist($naga);

        $manipuri = new Language();
        $manipuri->setName('Manipuri (Meitei)');
        $manipuri->setDescription('Langue tibéto-birmane parlée dans l\'État de Manipur en Inde.');
        $manipuri->setParent($tibetoBurman);
        $manager->persist($manipuri);


        // ---------------------------
        // Famille Afro-asiatique
        // ---------------------------

        $protoAfroAsiatic = new Language();
        $protoAfroAsiatic->setName('Proto-Afro-Asiatique');
        $protoAfroAsiatic->setDescription('Langue ancestrale des langues afro-asiatiques.');
        $manager->persist($protoAfroAsiatic);

        $semitic = new Language();
        $semitic->setName('Langues sémitiques');
        $semitic->setDescription('Sous-groupe des langues afro-asiatiques.');
        $semitic->setParent($protoAfroAsiatic);
        $manager->persist($semitic);

        $arabic = new Language();
        $arabic->setName('Arabe');
        $arabic->setDescription('Langue sémitique parlée dans de nombreux pays du Moyen-Orient et d’Afrique du Nord.');
        $arabic->setParent($semitic);
        $manager->persist($arabic);

        $hebrew = new Language();
        $hebrew->setName('Hébreu');
        $hebrew->setDescription('Langue sémitique parlée en Israël.');
        $hebrew->setParent($semitic);
        $manager->persist($hebrew);

        $amharic = new Language();
        $amharic->setName('Amharique');
        $amharic->setDescription('Langue sémitique parlée en Éthiopie.');
        $amharic->setParent($semitic);
        $manager->persist($amharic);

        // Groupe berbère
        $berber = new Language();
        $berber->setName('Berbère');
        $berber->setDescription('Langue afro-asiatique parlée en Afrique du Nord.');
        $berber->setParent($protoAfroAsiatic);
        $manager->persist($berber);

        $kabyle = new Language();
        $kabyle->setName('Kabyle');
        $kabyle->setDescription('Dialecte berbère parlé en Algérie.');
        $kabyle->setParent($berber);
        $manager->persist($kabyle);

        $tamasheq = new Language();
        $tamasheq->setName('Tamasheq');
        $tamasheq->setDescription('Dialecte berbère parlé par les Touaregs.');
        $tamasheq->setParent($berber);
        $manager->persist($tamasheq);

        // Groupe couchitique
        $cushitic = new Language();
        $cushitic->setName('Langues couchitiques');
        $cushitic->setDescription('Sous-groupe afro-asiatique parlé dans la Corne de l’Afrique.');
        $cushitic->setParent($protoAfroAsiatic);
        $manager->persist($cushitic);

        $somali = new Language();
        $somali->setName('Somali');
        $somali->setDescription('Langue couchitique parlée en Somalie.');
        $somali->setParent($cushitic);
        $manager->persist($somali);

        $afar = new Language();
        $afar->setName('Afar');
        $afar->setDescription('Langue couchitique parlée en Érythrée, Djibouti, Éthiopie.');
        $afar->setParent($cushitic);
        $manager->persist($afar);

        // ---------------------------
        // Famille Niger-Congo
        // ---------------------------

        $protoNigerCongo = new Language();
        $protoNigerCongo->setName('Proto-Niger-Congo');
        $protoNigerCongo->setDescription('Langue ancestrale des langues nigéro-congolaises.');
        $manager->persist($protoNigerCongo);

        $bantu = new Language();
        $bantu->setName('Langues bantoues');
        $bantu->setDescription('Sous-groupe des langues nigéro-congolaises.');
        $bantu->setParent($protoNigerCongo);
        $manager->persist($bantu);

        $swahili = new Language();
        $swahili->setName('Swahili');
        $swahili->setDescription('Langue bantoue parlée en Afrique de l’Est.');
        $swahili->setParent($bantu);
        $manager->persist($swahili);

        $zulu = new Language();
        $zulu->setName('Zoulou');
        $zulu->setDescription('Langue bantoue parlée en Afrique du Sud.');
        $zulu->setParent($bantu);
        $manager->persist($zulu);

        $yoruba = new Language();
        $yoruba->setName('Yoruba');
        $yoruba->setDescription('Langue nigéro-congolaise parlée au Nigeria.');
        $yoruba->setParent($protoNigerCongo);
        $manager->persist($yoruba);

        // ---------------------------
        // Famille Altaïque (controversée)
        // ---------------------------

        $altaic = new Language();
        $altaic->setName('Famille altaïque (hypothétique)');
        $altaic->setDescription('Famille linguistique regroupant turcique, mongolique, toungouse.');
        $manager->persist($altaic);

        $turkic = new Language();
        $turkic->setName('Langues turciques');
        $turkic->setDescription('Sous-groupe altaïque.');
        $turkic->setParent($altaic);
        $manager->persist($turkic);

        $turkish = new Language();
        $turkish->setName('Turc');
        $turkish->setDescription('Langue turcique parlée en Turquie.');
        $turkish->setParent($turkic);
        $manager->persist($turkish);

        $mongolic = new Language();
        $mongolic->setName('Langues mongoles');
        $mongolic->setDescription('Sous-groupe altaïque.');
        $mongolic->setParent($altaic);
        $manager->persist($mongolic);

        $mongolian = new Language();
        $mongolian->setName('Mongol');
        $mongolian->setDescription('Langue mongole parlée en Mongolie.');
        $mongolian->setParent($mongolic);
        $manager->persist($mongolian);

        // ---------------------------
        // Autres langues isolées ou petites familles
        // ---------------------------

        $basque = new Language();
        $basque->setName('Basque');
        $basque->setDescription('Langue isolée parlée dans les Pyrénées.');
        $manager->persist($basque);

        $hungarian = new Language();
        $hungarian->setName('Hongrois');
        $hungarian->setDescription('Langue finno-ougrienne parlée en Hongrie.');
        $manager->persist($hungarian);

        $finnish = new Language();
        $finnish->setName('Finnois');
        $finnish->setDescription('Langue finno-ougrienne parlée en Finlande.');
        $manager->persist($finnish);

        $manager->flush();
    }
}
