linguarum :

une application symfony qui permet d'explorer l'arbre généalogique des langues parlées dans le monde

j'ai crée mon nouveau projet symfony en version 6.4 webapp

j'ai installer le bundle tailwind avec la commande composer require

j'ai crée mon repo sur GitHub et effectue mes 1ers commits et push (le tout sur branch master)

j'ai crée mon premiere controller (home) afin de tester et aussi d'en faire ma future page d'accueil

j'ai changer le style de la Template de la homePage via "assets>styles>app.css" où j'ai retiré le bg blue de body{} et dans le fichier de Template même "templates>home>index.html.twig" où j'ai simplement afficher un h1 ainsi qu'un p auquels j'ai attribué du style via les class proposées par tailwind.

j'ai commencer à editer et ajouter ce readme au projet.

j'ai cree mon premier entity (language)

j'ai creer ma migration avec le make:migrations

j'ai executer avec le d:m:m

j'ai remove les deux dependances qui nous poseront problemes (stimulus ux turbo & doctrine messenger)

Création de Fixtures
J'ai créé des fixtures avec trois langues à des fins de test : le Proto-Indo-Européen, le Latin et le Français. Ces données sont insérées dans la base de données pour constituer une première structure de l’arbre généalogique des langues.

Affichage des données dans la vue
J'ai mis en place un premier affichage des langues dans le template home/index.html.twig.

Cette étape respecte l’architecture MVC de Symfony en suivant la logique suivante :

Controller : récupération des données via le LanguageRepository dans le contrôleur HomeController.

Repository : interrogation de la base de données pour obtenir l’ensemble des langues, y compris les relations parent-enfant.

Vue (Template) : affichage d'une liste des langues avec sa langue mère si elle en dispose (simple boucle for avec if pour l'instant que je modifierai plus tard)

j'ai cree une page detail pour tester l'affichage d'une langue unique (lorsqu'on clique dessus sur la homepage)

ayant un server assez long sur Windows je me retrouve souvent avec avec l'erreur "maximum execution time of 30..." j'ai donc été rechercher comment corriger cela et une des solutions est de modifier ce parametre dans le .ini ; j'ai donc modifié ce dernier à 120 (cf Screenshot)

je cherche à styliser un minimum pour avoir un rendu (temporaire) style arbre généalogique avec imbrication je me suis fait aider par une IA pour cela

je cherche désormais à intégrer un grand nombre de données , plutôt que d'ecrire manuellement des fixtures la question d'un fichier csv se pose, cependant ce que je croyais au debut simple comme interroger une api s'avère plus compliqué que prévu, je pensais à Wikidata ou même glottolog mais zero réponse, je vais donc faire du scrapping sur une page wikipedia libre de droits, là aussi pour le scrapping plusieurs solutions s'offrent à moi nottement une qui m'as attiré pour la science et le besoin de l'exercice en s'accordant parfaitement dans mon projet Symfony ; il s'agit de SYMFONY PANTHER mais au vu de l'utilité je penche plutôt vers le classique beautifulSoup car wikipedia = html et n'utilise pas d'animation JS donc pas besoin de panther.

j'ai beaucoup de difficultés à récuperer des données en scrapping pour l'instant (malgré l'aide de l'IA), il faudrait que je prenne un cours complet sur le sujet.

Pour avancer dans le projet je vais quand même devoir injecter des données je vais donc rajouter des fixtures à la main et me servir d'un faker pour eviter de rester bloqué , si il me reste du temps avant le rendu j'essayerai le scrapping sur wikipedia ou autre, j'essaierai également de recuperer directement un csv via une requete sur une api.

etat avancement 2mai :
➤ État actuel du projet (Résumé reformulé) :
Fonctionnalité actuelle : Une page d'accueil affiche une liste de langues. Chaque langue est cliquable et mène à une page de détails individuels, fonctionnelle.

Problème technique rencontré : Sur Windows, le temps d’exécution PHP limité (erreur "maximum execution time of 30 seconds") a été contourné en modifiant le fichier php.ini pour passer la limite à 120 secondes.

Style : Tu as commencé à styliser l’affichage des langues de façon à représenter un arbre généalogique, avec un effet visuel d’imbrication. Ce style est temporaire, mais il donne un bon aperçu du concept.

Données :

Tu veux enrichir l’application avec un grand volume de langues et de relations parent/enfant.

Tu as tenté d’utiliser Wikidata et Glottolog via des API, sans succès (résultats vides ou mal formatés).

Tu t’es tourné vers le web scraping, ciblant Wikipedia.

Tu as considéré Symfony Panther (headless browser pour JS), mais as préféré BeautifulSoup car Wikipedia est en HTML pur.

Tu rencontres des difficultés techniques pour scrapper les données, notamment pour localiser la section contenant les listes utiles.

Prochaine étape immédiate :

Pour ne pas rester bloqué, tu vas injecter manuellement des fixtures via Faker afin de continuer à développer et tester les fonctionnalités.

j'ai voulu ajouter une image dans le projet pour poouvoir la mettre en background et j'ai voulu faire comme en cours (assets/images) mais ca ne marchait pas j'ai donc vu sur internet qu'on pouvais égalementretrouver le chemain facilement en mettant le dossier images dans (public/images) j'ai donc fait ainsi,

j'ai installer le bundle easyadmin et j'ai créer des users avec make:user , 1 admin + 2 users manuels et enfin 10 users fake (en ayant installer la dependance faker ) j'ai apporter des modification sur l'entité User manuellement j'ai rajouté firstname et lastname . apres avoir appliquer la migration j'ai été mettre à jour les fixtures puis j'ai re appliquer migrations et la charge des fixtures

j'ai créer une logique de login afin que l'admin puisse se connecter ainsi que les users, l'utilisation de "make:auth" en 1er lieu est abandonnée car depréciée plutôt utilisation du make:security:form-login

essai de conexion valide !

modification de la vue pour ameliorer un peu le style

lorsque le admin se log il est redirigé vers le crud
lorsque c'est un user il est redirigé vers le home (plus tard il sera vers une page de user pour proposer languages et modifier son profil) j'ai utilisé la fonction onAuthentificationSucces dans AppAuthenticator.php qui se trouve dans un dossier security se trouvant lui-même dans src/ , certes depuis les nouvelles versions de Symfony tout à été refactorisé et nous ne sommes plus obligé de faire ainsi mais j'ai fait cela et ca fonctionne.

todo : navbar presente sur homepage qui contient login si non log ; logout si déjà loggé et admin si loggé en tant que admin

je cherche maintenant à modifier le style de la page easyadmin en y ajoutant ma navbar cependant il s'aver assez compliqué car je dois créer la Template du bundle manuellement puis aller créer manuellement un easy_admin.yaml dans les packages et l'un appelle l'autre et je me retrouve avec une boucle infinie qui fait crash Symfony je reste donc sur le easyadmin de base.

je dois créer un formulaire d'inscription donc :
RegistrationController ✅

RegistrationFormType ✅

La vue register.html.twig ✅

Le formulaire bien relié à l'entité User ✅

Et l'encodage du mot de passe dans le controller ✅

j'ai ajoute lien register dans navbar

je cree uneentityé proposedlanguage qui sera remplie avec les propositions de langues fournies par les users connectés

je créer un formulaire de proposedlanguage

j'ajoute le lien dans la navbar si connecté

j'ai ajoute message flash si langue bien envoyée

j'ai ajouter un crud easyadmin pour languageproposed
dans mon proposedlanguagecrudcontroller j'ai caché le user car l'admin n'as pas à modifier ou supprimer l'user qui propose

je vais devoir créer un todo si le language est approuvé alors il rentre dans une sorte de TODOLIST présente sur la navbar du admin
donc un controller AdminTodoController
ainsi qu'un Template admin/admintodo/index
dans la page de todo il y a un bouton de validation sous chaque language proposé pour rediriger vers l'ajout manuel d'une langue dans le easyadmin (préremplie)
j'ai ajouter les users dans le crud du admin
j'ai fait en sorte que dans le crud proposed languages il y a le nom du user qui propose et pas le id
j'ai aussi fait en sorte que dans le crud language il y ai le nom de la langue parente et pas l'id
todo : faire en sorte que ce soit des names et pas des id dans le easyadmin pour les users et les languages lors de l'ajout d'un new
