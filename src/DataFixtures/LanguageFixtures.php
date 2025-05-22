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
        $protoAfroAsiatic->setDescription('Langue mère des langues afro-asiatiques.');
        $manager->persist($protoAfroAsiatic);

        // Langues sémitiques anciennes (au même niveau que Égyptien ancien)
        $semiticOld = new Language();
        $semiticOld->setName('Vieux sémitique');
        $semiticOld->setDescription('Langue mère des langues sémitiques anciennes (disparues pour certaines)');
        $semiticOld->setParent($protoAfroAsiatic);
        $manager->persist($semiticOld);

        $akkadian = new Language();
        $akkadian->setName('Akkadien');
        $akkadian->setDescription('Langue sémitique ancienne de Mésopotamie, aujourd\'hui disparue.');
        $akkadian->setParent($semiticOld);
        $manager->persist($akkadian);

        $gueze = new Language();
        $gueze->setName('Guèze');
        $gueze->setDescription('Langue liturgique ancienne d\'Éthiopie, langue sémitique.');
        $gueze->setParent($semiticOld);
        $manager->persist($gueze);

        $aramaicOld = new Language();
        $aramaicOld->setName('Araméen ancien');
        $aramaicOld->setDescription('Langue sémitique ancienne, ancêtre des dialectes araméens modernes.');
        $aramaicOld->setParent($semiticOld);
        $manager->persist($aramaicOld);

        $phoenician = new Language();
        $phoenician->setName('Phénicien');
        $phoenician->setDescription('Langue sémitique ancienne parlée par les Phéniciens, aujourd\'hui disparue.');
        $phoenician->setParent($semiticOld);
        $manager->persist($phoenician);

        // Langues sémitiques modernes 
        $semiticModern = new Language();
        $semiticModern->setName('Langues sémitiques modernes');
        $semiticModern->setDescription('Sous-groupe des langues sémitiques encore parlées aujourd\'hui.');
        $semiticModern->setParent($protoAfroAsiatic);
        $manager->persist($semiticModern);

        // Arabe et ses dialectes
        $arabicModern = new Language();
        $arabicModern->setName('Arabe');
        $arabicModern->setDescription('Langue sémitique moderne parlée au Moyen-Orient et en Afrique du Nord.');
        $arabicModern->setParent($semiticModern);
        $manager->persist($arabicModern);

        $maghrebiArabic = new Language();
        $maghrebiArabic->setName('Arabe maghrébin');
        $maghrebiArabic->setDescription('Dialecte arabe parlé en Afrique du Nord.');
        $maghrebiArabic->setParent($arabicModern);
        $manager->persist($maghrebiArabic);



        $levantineArabic = new Language();
        $levantineArabic->setName('Arabe levantin');
        $levantineArabic->setDescription('Dialecte arabe parlé au Levant (Syrie, Liban, Jordanie, Palestine).');
        $levantineArabic->setParent($arabicModern);
        $manager->persist($levantineArabic);

        $egyptianArabic = new Language();
        $egyptianArabic->setName('Arabe égyptien');
        $egyptianArabic->setDescription('Dialecte arabe parlé en Égypte.');
        $egyptianArabic->setParent($arabicModern);
        $manager->persist($egyptianArabic);

        // Hébreu
        $hebrewModern = new Language();
        $hebrewModern->setName('Hébreu moderne');
        $hebrewModern->setDescription('Langue sémitique moderne parlée en Israël.');
        $hebrewModern->setParent($semiticModern);
        $manager->persist($hebrewModern);

        // Amharique
        $amharique = new Language();
        $amharique->setName('Amharique');
        $amharique->setDescription('Langue sémitique parlée en Éthiopie.');
        $amharique->setParent($semiticModern);
        $manager->persist($amharique);

        // Tigrinya
        $tigrinya = new Language();
        $tigrinya->setName('Tigrinya');
        $tigrinya->setDescription('Langue sémitique parlée en Érythrée et au nord de l\'Éthiopie.');
        $tigrinya->setParent($semiticModern);
        $manager->persist($tigrinya);

        // Maltais
        $maltese = new Language();
        $maltese->setName('Maltais');
        $maltese->setDescription('Langue sémitique moderne parlée à Malte, dérivée de l\'arabe.');
        $maltese->setParent($semiticModern);
        $manager->persist($maltese);

        // Néo-araméen (langues araméennes modernes)
        $neoAramaic = new Language();
        $neoAramaic->setName('Araméen moderne');
        $neoAramaic->setDescription('Langues sémitiques dérivées de l\'araméen, parlées par quelques communautés.');
        $neoAramaic->setParent($semiticModern);
        $manager->persist($neoAramaic);


        // Groupe Égyptien
        $egyptian = new Language();
        $egyptian->setName('Égyptien ancien');
        $egyptian->setDescription('Langue afro-asiatique historique parlée dans l’Égypte antique, ancêtre du copte.');
        $egyptian->setParent($protoAfroAsiatic);
        $manager->persist($egyptian);

        $copte = new Language();
        $copte->setName('Copte');
        $copte->setDescription('Langue chrétienne ancienne d’Égypte, descendante de l’égyptien ancien.');
        $copte->setParent($egyptian);
        $manager->persist($copte);

        // Groupe Amazigh (Berbère)
        $amazigh = new Language();
        $amazigh->setName('Langues amazighes');
        $amazigh->setDescription('Sous-groupe des langues afro-asiatiques parlées en Afrique du Nord.');
        $amazigh->setParent($protoAfroAsiatic);
        $manager->persist($amazigh);

        $kabyle = new Language();
        $kabyle->setName('Kabyle');
        $kabyle->setDescription('Langue amazighe parlée en Kabylie, Algérie.');
        $kabyle->setParent($amazigh);
        $manager->persist($kabyle);

        $tamasheq = new Language();
        $tamasheq->setName('Tamasheq');
        $tamasheq->setDescription('Langue amazighe parlée par les Touaregs au Mali, Niger, et Algérie.');
        $tamasheq->setParent($amazigh);
        $manager->persist($tamasheq);

        $rifain = new Language();
        $rifain->setName('Rifain');
        $rifain->setDescription('Langue amazighe parlée dans la région du Rif, Maroc.');
        $rifain->setParent($amazigh);
        $manager->persist($rifain);

        $tachelhit = new Language();
        $tachelhit->setName('Tachelhit');
        $tachelhit->setDescription('Langue amazighe parlée dans le Souss, Maroc.');
        $tachelhit->setParent($amazigh);
        $manager->persist($tachelhit);



        $zenaga = new Language();
        $zenaga->setName('Zenaga');
        $zenaga->setDescription('Langue amazighe parlée en Mauritanie.');
        $zenaga->setParent($amazigh);
        $manager->persist($zenaga);


        $shenwa = new Language();
        $shenwa->setName('Chenoua');
        $shenwa->setDescription('Dialecte amazighe parlé dans la région de Chenoua, Algérie.');
        $shenwa->setParent($amazigh);
        $manager->persist($shenwa);

        $matmata = new Language();
        $matmata->setName('Matmata');
        $matmata->setDescription('Dialecte amazighe parlé dans le sud de la Tunisie.');
        $matmata->setParent($amazigh);
        $manager->persist($matmata);

        $djerbi = new Language();
        $djerbi->setName('Djerbi');
        $djerbi->setDescription('Dialecte amazighe parlé dans la région de Djerba, Tunisie.');
        $djerbi->setParent($amazigh);
        $manager->persist($djerbi);

        // Groupe Couchitique
        $cushitic = new Language();
        $cushitic->setName('Langues couchitiques');
        $cushitic->setDescription('Sous-groupe afro-asiatique principalement parlé dans la Corne de l’Afrique.');
        $cushitic->setParent($protoAfroAsiatic);
        $manager->persist($cushitic);

        $somali = new Language();
        $somali->setName('Somali');
        $somali->setDescription('Langue couchitique parlée en Somalie, langue nationale.');
        $somali->setParent($cushitic);
        $manager->persist($somali);

        $afar = new Language();
        $afar->setName('Afar');
        $afar->setDescription('Langue couchitique parlée à Djibouti, en Érythrée et en Éthiopie.');
        $afar->setParent($cushitic);
        $manager->persist($afar);

        $oromo = new Language();
        $oromo->setName('Oromo');
        $oromo->setDescription('Langue couchitique parlée principalement en Éthiopie, la plus parlée de la famille couchitique.');
        $oromo->setParent($cushitic);
        $manager->persist($oromo);

        // Groupe Tchadique
        $chadic = new Language();
        $chadic->setName('Langues tchadiques');
        $chadic->setDescription('Sous-groupe afro-asiatique parlé principalement au Tchad et au Nigeria.');
        $chadic->setParent($protoAfroAsiatic);
        $manager->persist($chadic);

        $hausa = new Language();
        $hausa->setName('Haoussa');
        $hausa->setDescription('Langue tchadique la plus parlée, utilisée au Nigeria, Niger, et régions voisines.');
        $hausa->setParent($chadic);
        $manager->persist($hausa);

        // Groupe Omotique
        $omotic = new Language();
        $omotic->setName('Langues omotiques');
        $omotic->setDescription('Sous-groupe afro-asiatique parlé principalement dans le sud-ouest de l’Éthiopie.');
        $omotic->setParent($protoAfroAsiatic);
        $manager->persist($omotic);

        $wolaytta = new Language();
        $wolaytta->setName('Wolaytta');
        $wolaytta->setDescription('Langue omotique parlée en Éthiopie.');
        $wolaytta->setParent($omotic);
        $manager->persist($wolaytta);



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
// Famille Nakh-Daghestanienne
// ---------------------------

        $protoNakhDaghestanian = new Language();
        $protoNakhDaghestanian->setName('Proto-Nakh-Daghestanien');
        $protoNakhDaghestanian->setDescription('Langue hypothétique ancêtre des langues nakho-daghestaniennes parlées dans le Caucase du Nord-Est.');
        $manager->persist($protoNakhDaghestanian);

        // Groupe Nakh
        $nakh = new Language();
        $nakh->setName('Langues Nakh');
        $nakh->setDescription('Sous-groupe comprenant le tchétchène, l’ingouche et le batsbi.');
        $nakh->setParent($protoNakhDaghestanian);
        $manager->persist($nakh);

        $chechen = new Language();
        $chechen->setName('Tchétchène');
        $chechen->setDescription('Langue nakh parlée en Tchétchénie (Russie).');
        $chechen->setParent($nakh);
        $manager->persist($chechen);

        $ingush = new Language();
        $ingush->setName('Ingouche');
        $ingush->setDescription('Langue nakh parlée en Ingouchie (Russie).');
        $ingush->setParent($nakh);
        $manager->persist($ingush);

        $batsbi = new Language();
        $batsbi->setName('Bats (ou Batsbi)');
        $batsbi->setDescription('Langue nakh en voie de disparition, parlée en Géorgie.');
        $batsbi->setParent($nakh);
        $manager->persist($batsbi);

        // Groupe Daghestanien
        $daghestanian = new Language();
        $daghestanian->setName('Langues Daghestaniennes');
        $daghestanian->setDescription('Sous-groupe très diversifié parlé au Daghestan et dans les régions voisines.');
        $daghestanian->setParent($protoNakhDaghestanian);
        $manager->persist($daghestanian);

        $avar = new Language();
        $avar->setName('Avar');
        $avar->setDescription('Langue daghestanienne majoritaire au Daghestan.');
        $avar->setParent($daghestanian);
        $manager->persist($avar);

        $lezgin = new Language();
        $lezgin->setName('Lezgien');
        $lezgin->setDescription('Langue daghestanienne parlée au Daghestan et au nord de l’Azerbaïdjan.');
        $lezgin->setParent($daghestanian);
        $manager->persist($lezgin);

        $dargwa = new Language();
        $dargwa->setName('Dargwa');
        $dargwa->setDescription('Langue daghestanienne parlée au centre du Daghestan.');
        $dargwa->setParent($daghestanian);
        $manager->persist($dargwa);

        $lakh = new Language();
        $lakh->setName('Lak');
        $lakh->setDescription('Langue daghestanienne parlée dans la région de Lakie.');
        $lakh->setParent($daghestanian);
        $manager->persist($lakh);

        $tabasaran = new Language();
        $tabasaran->setName('Tabasaran');
        $tabasaran->setDescription('Langue daghestanienne réputée pour sa complexité grammaticale.');
        $tabasaran->setParent($daghestanian);
        $manager->persist($tabasaran);

        $protoKartvelian = new Language();
        $protoKartvelian->setName('Proto-Kartvélien');
        $protoKartvelian->setDescription('Langue hypothétique à l’origine de la famille kartvélienne.');
        $manager->persist($protoKartvelian);

        $georgian = new Language();
        $georgian->setName('Géorgien');
        $georgian->setDescription('Langue kartvélienne parlée en Géorgie, la plus représentée du groupe.');
        $georgian->setParent($protoKartvelian);
        $manager->persist($georgian);

        $mingrelian = new Language();
        $mingrelian->setName('Mingrélien');
        $mingrelian->setDescription('Langue kartvélienne parlée dans l’ouest de la Géorgie.');
        $mingrelian->setParent($protoKartvelian);
        $manager->persist($mingrelian);

        $laz = new Language();
        $laz->setName('Laz');
        $laz->setDescription('Langue kartvélienne parlée en Turquie et en Géorgie.');
        $laz->setParent($protoKartvelian);
        $manager->persist($laz);

        $swan = new Language();
        $swan->setName('Svan');
        $swan->setDescription('Langue kartvélienne ancienne parlée dans les montagnes du nord de la Géorgie.');
        $swan->setParent($protoKartvelian);
        $manager->persist($swan);


        // ---------------------------
// Famille Altaïque (hypothétique)
// ---------------------------

        $protoAltaic = new Language();
        $protoAltaic->setName('Proto-Altaïque');
        $protoAltaic->setDescription('Langue hypothétique ancêtre des langues turciques, mongoliques et toungouses.');
        $manager->persist($protoAltaic);

        // Groupe Turcique
        $turkic = new Language();
        $turkic->setName('Langues turciques');
        $turkic->setDescription('Sous-groupe des langues altaïques parlées en Asie centrale et occidentale.');
        $turkic->setParent($protoAltaic);
        $manager->persist($turkic);

        $turkish = new Language();
        $turkish->setName('Turc');
        $turkish->setDescription('Langue turcique parlée en Turquie et à Chypre.');
        $turkish->setParent($turkic);
        $manager->persist($turkish);

        $azerbaijani = new Language();
        $azerbaijani->setName('Azéri');
        $azerbaijani->setDescription('Langue turcique parlée en Azerbaïdjan.');
        $azerbaijani->setParent($turkic);
        $manager->persist($azerbaijani);

        $uzbek = new Language();
        $uzbek->setName('Ouzbek');
        $uzbek->setDescription('Langue turcique parlée en Ouzbékistan.');
        $uzbek->setParent($turkic);
        $manager->persist($uzbek);

        $kazakh = new Language();
        $kazakh->setName('Kazakh');
        $kazakh->setDescription('Langue turcique parlée au Kazakhstan.');
        $kazakh->setParent($turkic);
        $manager->persist($kazakh);

        $turkmen = new Language();
        $turkmen->setName('Turkmène');
        $turkmen->setDescription('Langue turcique parlée au Turkménistan.');
        $turkmen->setParent($turkic);
        $manager->persist($turkmen);

        $uyghur = new Language();
        $uyghur->setName('Ouïghour');
        $uyghur->setDescription('Langue turcique parlée au Xinjiang (Chine).');
        $uyghur->setParent($turkic);
        $manager->persist($uyghur);

        $kyrgyz = new Language();
        $kyrgyz->setName('Kirghiz');
        $kyrgyz->setDescription('Langue turcique parlée au Kirghizistan.');
        $kyrgyz->setParent($turkic);
        $manager->persist($kyrgyz);

        $tatar = new Language();
        $tatar->setName('Tatar');
        $tatar->setDescription('Langue turcique parlée au Tatarstan (Russie).');
        $tatar->setParent($turkic);
        $manager->persist($tatar);

        // Groupe Mongolique
        $mongolic = new Language();
        $mongolic->setName('Langues mongoliques');
        $mongolic->setDescription('Sous-groupe des langues altaïques parlées principalement en Mongolie.');
        $mongolic->setParent($protoAltaic);
        $manager->persist($mongolic);

        $mongol = new Language();
        $mongol->setName('Mongol (Khalkha)');
        $mongol->setDescription('Langue principale parlée en Mongolie.');
        $mongol->setParent($mongolic);
        $manager->persist($mongol);

        $buriat = new Language();
        $buriat->setName('Bouriate');
        $buriat->setDescription('Langue mongolique parlée en Russie (Sibérie).');
        $buriat->setParent($mongolic);
        $manager->persist($buriat);

        $kalmyk = new Language();
        $kalmyk->setName('Kalmouk');
        $kalmyk->setDescription('Langue mongolique parlée en Russie européenne.');
        $kalmyk->setParent($mongolic);
        $manager->persist($kalmyk);

        // Groupe Toungouse-Manchou
        $tungusic = new Language();
        $tungusic->setName('Langues toungouses');
        $tungusic->setDescription('Langues de Sibérie orientale et de Mandchourie.');
        $tungusic->setParent($protoAltaic);
        $manager->persist($tungusic);

        $evenki = new Language();
        $evenki->setName('Evenki');
        $evenki->setDescription('Langue toungouse parlée en Sibérie.');
        $evenki->setParent($tungusic);
        $manager->persist($evenki);

        $even = new Language();
        $even->setName('Even');
        $even->setDescription('Langue toungouse parlée en Russie extrême-orientale.');
        $even->setParent($tungusic);
        $manager->persist($even);

        $manchu = new Language();
        $manchu->setName('Mandchou');
        $manchu->setDescription('Langue historique de la dynastie Qing en Chine.');
        $manchu->setParent($tungusic);
        $manager->persist($manchu);

        // ---------------------------
// Famille Japonico-Coréenne (Hypothétique)
// ---------------------------

        $protoJapKor = new Language();
        $protoJapKor->setName('Langues Japonico-Coréennes');
        $protoJapKor->setDescription(
            'Famille hypothétique regroupant les langues japonaises et coréennes. 
    Cette classification n’est pas confirmée par un consensus scientifique, 
    mais elle est parfois proposée dans certaines théories linguistiques.'
        );
        $manager->persist($protoJapKor);

        // Japonais
        $japanese = new Language();
        $japanese->setName('Japonais');
        $japanese->setDescription('Langue principale parlée au Japon.');
        $japanese->setParent($protoJapKor);
        $manager->persist($japanese);

        $ryukyuan = new Language();
        $ryukyuan->setName('Langues Ryukyuan');
        $ryukyuan->setDescription('Langues parlées dans l’archipel des Ryukyu, au sud du Japon.');
        $ryukyuan->setParent($protoJapKor);
        $manager->persist($ryukyuan);

        // Coréen
        $korean = new Language();
        $korean->setName('Coréen');
        $korean->setDescription('Langue principale parlée en Corée du Sud et du Nord.');
        $korean->setParent($protoJapKor);
        $manager->persist($korean);

        $seoulDialect = new Language();
        $seoulDialect->setName('Dialecte de Séoul');
        $seoulDialect->setDescription('Dialecte standard et officiel du Coréen en Corée du Sud.');
        $seoulDialect->setParent($korean);
        $manager->persist($seoulDialect);

        $gyeongsangDialect = new Language();
        $gyeongsangDialect->setName('Dialecte Gyeongsang');
        $gyeongsangDialect->setDescription('Dialecte parlé dans la région de Busan et du sud-est de la Corée.');
        $gyeongsangDialect->setParent($korean);
        $manager->persist($gyeongsangDialect);

        $hamgyongDialect = new Language();
        $hamgyongDialect->setName('Dialecte Hamgyong');
        $hamgyongDialect->setDescription('Dialecte parlé dans le nord-est de la Corée du Nord.');
        $hamgyongDialect->setParent($korean);
        $manager->persist($hamgyongDialect);




        // ---------------------------
// Famille Austroasiatique
// ---------------------------

        $protoAustroasiatic = new Language();
        $protoAustroasiatic->setName('Langues Austroasiatiques');
        $protoAustroasiatic->setDescription('Famille de langues parlées principalement en Asie du Sud-Est continentale.');
        $manager->persist($protoAustroasiatic);

        $vietnamese = new Language();
        $vietnamese->setName('Vietnamien');
        $vietnamese->setDescription('Langue austroasiatique parlée au Vietnam.');
        $vietnamese->setParent($protoAustroasiatic);
        $manager->persist($vietnamese);

        $khmer = new Language();
        $khmer->setName('Khmer');
        $khmer->setDescription('Langue austroasiatique parlée au Cambodge.');
        $khmer->setParent($protoAustroasiatic);
        $manager->persist($khmer);


        // ---------------------------
// Famille Austronésienne
// ---------------------------

        $protoAustronesian = new Language();
        $protoAustronesian->setName('Langues Austronésiennes');
        $protoAustronesian->setDescription('Famille de langues parlées dans les îles du Pacifique, la Malaisie, l’Indonésie et les Philippines.');
        $manager->persist($protoAustronesian);

        $malay = new Language();
        $malay->setName('Malais');
        $malay->setDescription('Langue austronésienne parlée en Malaisie, Indonésie et Brunei.');
        $malay->setParent($protoAustronesian);
        $manager->persist($malay);

        $indonesian = new Language();
        $indonesian->setName('Indonésien');
        $indonesian->setDescription('Variante standardisée du malais parlée en Indonésie.');
        $indonesian->setParent($protoAustronesian);
        $manager->persist($indonesian);

        $tagalog = new Language();
        $tagalog->setName('Tagalog');
        $tagalog->setDescription('Langue austronésienne parlée principalement aux Philippines.');
        $tagalog->setParent($protoAustronesian);
        $manager->persist($tagalog);


        // ---------------------------
// Famille Tai-Kadai
// ---------------------------

        $protoTaikadai = new Language();
        $protoTaikadai->setName('Langues Tai-Kadai');
        $protoTaikadai->setDescription('Famille de langues parlées en Asie du Sud-Est, notamment en Thaïlande et au Laos.');
        $manager->persist($protoTaikadai);

        $thai = new Language();
        $thai->setName('Thaï');
        $thai->setDescription('Langue tai-kadai parlée principalement en Thaïlande.');
        $thai->setParent($protoTaikadai);
        $manager->persist($thai);

        $lao = new Language();
        $lao->setName('Lao');
        $lao->setDescription('Langue tai-kadai parlée principalement au Laos.');
        $lao->setParent($protoTaikadai);
        $manager->persist($lao);



        // ---------------------------
// Famille Finno-Ougrienne
// ---------------------------

        $protoFinnoUgric = new Language();
        $protoFinnoUgric->setName('Langues Finno-Ougriennes');
        $protoFinnoUgric->setDescription('Famille de langues ouraliennes comprenant les langues finnoises et ougriennes.');
        $manager->persist($protoFinnoUgric);

        // Sous-groupe finnois
        $finnoFinnic = new Language();
        $finnoFinnic->setName('Langues Finnoises');
        $finnoFinnic->setDescription('Sous-groupe des langues finno-ougriennes comprenant le finnois et d’autres langues proches.');
        $finnoFinnic->setParent($protoFinnoUgric);
        $manager->persist($finnoFinnic);

        $finnish = new Language();
        $finnish->setName('Finnois');
        $finnish->setDescription('Langue finnoise parlée principalement en Finlande.');
        $finnish->setParent($finnoFinnic);
        $manager->persist($finnish);

        $estonian = new Language();
        $estonian->setName('Estonien');
        $estonian->setDescription('Langue finnoise parlée en Estonie.');
        $estonian->setParent($finnoFinnic);
        $manager->persist($estonian);

        // Sous-groupe ougrien
        $protoUgric = new Language();
        $protoUgric->setName('Langues Ougriennes');
        $protoUgric->setDescription('Sous-groupe des langues finno-ougriennes comprenant le hongrois et plusieurs langues de Sibérie.');
        $protoUgric->setParent($protoFinnoUgric);
        $manager->persist($protoUgric);

        $hungarian = new Language();
        $hungarian->setName('Hongrois');
        $hungarian->setDescription('Langue ougrienne parlée principalement en Hongrie.');
        $hungarian->setParent($protoUgric);
        $manager->persist($hungarian);

        $khanty = new Language();
        $khanty->setName('Khanty');
        $khanty->setDescription('Langue ougrienne parlée en Sibérie occidentale, Russie.');
        $khanty->setParent($protoUgric);
        $manager->persist($khanty);

        $mansy = new Language();
        $mansy->setName('Mansy');
        $mansy->setDescription('Langue ougrienne parlée en Sibérie occidentale, Russie.');
        $mansy->setParent($protoUgric);
        $manager->persist($mansy);

        // ---------------------------
// Famille Dravidienne
// ---------------------------

        $protoDravidian = new Language();
        $protoDravidian->setName('Proto-Dravidien');
        $protoDravidian->setDescription('Langue ancestrale des langues dravidiennes, parlées principalement en Inde du Sud et Sri Lanka.');
        $manager->persist($protoDravidian);

        $tamil = new Language();
        $tamil->setName('Tamoul');
        $tamil->setDescription('Langue dravidienne parlée principalement au Tamil Nadu (Inde) et au Sri Lanka.');
        $tamil->setParent($protoDravidian);
        $manager->persist($tamil);

        $telugu = new Language();
        $telugu->setName('Télougou');
        $telugu->setDescription('Langue dravidienne parlée principalement dans l\'État d\'Andhra Pradesh et Telangana en Inde.');
        $telugu->setParent($protoDravidian);
        $manager->persist($telugu);

        $kannada = new Language();
        $kannada->setName('Kannada');
        $kannada->setDescription('Langue dravidienne parlée dans l\'État du Karnataka en Inde.');
        $kannada->setParent($protoDravidian);
        $manager->persist($kannada);

        $malayalam = new Language();
        $malayalam->setName('Malayalam');
        $malayalam->setDescription('Langue dravidienne parlée principalement dans l\'État du Kerala en Inde.');
        $malayalam->setParent($protoDravidian);
        $manager->persist($malayalam);

        // ---------------------------
// Famille Australienne (Langues aborigènes d'Australie)
// ---------------------------

        $protoAustralian = new Language();
        $protoAustralian->setName('Langues Australes');
        $protoAustralian->setDescription('Famille regroupant les langues autochtones parlées en Australie.');
        $manager->persist($protoAustralian);

        // Exemple de sous-groupes

        $pidginEnglish = new Language();
        $pidginEnglish->setName('Pidgin anglais australien');
        $pidginEnglish->setDescription('Langue véhiculaire simplifiée née du contact entre autochtones et colons.');
        $pidginEnglish->setParent($protoAustralian);
        $manager->persist($pidginEnglish);

        $pamaNyungan = new Language();
        $pamaNyungan->setName('Langues Pama-Nyungan');
        $pamaNyungan->setDescription('Principal groupe de langues aborigènes couvrant la majorité du territoire australien.');
        $pamaNyungan->setParent($protoAustralian);
        $manager->persist($pamaNyungan);

        $westernDesert = new Language();
        $westernDesert->setName('Langues du désert occidental');
        $westernDesert->setDescription('Sous-groupe important des langues Pama-Nyungan.');
        $westernDesert->setParent($pamaNyungan);
        $manager->persist($westernDesert);

        // ---------------------------
// Famille Eskimo-Aleoute
// ---------------------------

        $protoEskimoAleut = new Language();
        $protoEskimoAleut->setName('Proto-Eskimo-Aleoute');
        $protoEskimoAleut->setDescription('Famille de langues parlées dans l\'Arctique nord-américain et sibérien.');
        $manager->persist($protoEskimoAleut);

        $eskimo = new Language();
        $eskimo->setName('Langues Eskimo');
        $eskimo->setDescription('Sous-groupe comprenant les langues inuktitut, inuit, yupik.');
        $eskimo->setParent($protoEskimoAleut);
        $manager->persist($eskimo);

        $inuktitut = new Language();
        $inuktitut->setName('Inuktitut');
        $inuktitut->setDescription('Langue eskimo parlée principalement au Canada.');
        $inuktitut->setParent($eskimo);
        $manager->persist($inuktitut);

        $yupik = new Language();
        $yupik->setName('Yupik');
        $yupik->setDescription('Langue eskimo parlée en Alaska et Sibérie.');
        $yupik->setParent($eskimo);
        $manager->persist($yupik);

        $aleut = new Language();
        $aleut->setName('Aleoute');
        $aleut->setDescription('Langue parlée dans les îles Aléoutiennes.');
        $aleut->setParent($protoEskimoAleut);
        $manager->persist($aleut);

        // ---------------------------
// Famille Amérindienne
// ---------------------------

        $protoAmerindian = new Language();
        $protoAmerindian->setName('Langues Amérindiennes');
        $protoAmerindian->setDescription('Famille regroupant les nombreuses langues autochtones des Amériques.');
        $manager->persist($protoAmerindian);

        // Famille Maya
        $maya = new Language();
        $maya->setName('Langues Maya');
        $maya->setDescription('Famille de langues parlées au Mexique et en Amérique centrale.');
        $maya->setParent($protoAmerindian);
        $manager->persist($maya);

        // Famille Quechua (Inca)
        $quechua = new Language();
        $quechua->setName('Langues Quechua');
        $quechua->setDescription('Famille de langues parlée dans les Andes, héritière de la langue de l’Empire Inca.');
        $quechua->setParent($protoAmerindian);
        $manager->persist($quechua);

        // Famille Aymara
        $aymara = new Language();
        $aymara->setName('Langues Aymara');
        $aymara->setDescription('Famille de langues andines parlées notamment en Bolivie et Pérou.');
        $aymara->setParent($protoAmerindian);
        $manager->persist($aymara);

        // Famille Tupie-Guarani
        $tupieGuarani = new Language();
        $tupieGuarani->setName('Langues Tupie-Guarani');
        $tupieGuarani->setDescription('Famille de langues amérindiennes parlées au Brésil, Paraguay, et régions voisines.');
        $tupieGuarani->setParent($protoAmerindian);
        $manager->persist($tupieGuarani);

        // Famille Na-Dené (Amérique du Nord)
        $naDene = new Language();
        $naDene->setName('Langues Na-Dené');
        $naDene->setDescription('Famille de langues amérindiennes parlée en Amérique du Nord.');
        $naDene->setParent($protoAmerindian);
        $manager->persist($naDene);

        // Famille Algonquienne (Amérique du Nord)
        $algonquian = new Language();
        $algonquian->setName('Langues Algonquiennes');
        $algonquian->setDescription('Famille de langues amérindiennes d\'Amérique du Nord.');
        $algonquian->setParent($protoAmerindian);
        $manager->persist($algonquian);

        // Famille Iroquoienne (Amérique du Nord)
        $iroquoian = new Language();
        $iroquoian->setName('Langues Iroquoiennes');
        $iroquoian->setDescription('Famille de langues amérindiennes parlée en Amérique du Nord.');
        $iroquoian->setParent($protoAmerindian);
        $manager->persist($iroquoian);


        $manager->flush();
    }
}
