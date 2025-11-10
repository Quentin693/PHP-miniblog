<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
        private SluggerInterface $slugger
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        // Créer un utilisateur admin
        $admin = new User();
        $admin->setEmail('admin@miniblog.fr');
        $admin->setName('Admin');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin123'));
        $manager->persist($admin);

        // Créer un utilisateur normal
        $user = new User();
        $user->setEmail('user@miniblog.fr');
        $user->setName('Jean Dupont');
        $user->setPassword($this->passwordHasher->hashPassword($user, 'user123'));
        $manager->persist($user);

        // Articles sur les monuments français avec catégories et régions
        $articlesData = [
            // MONUMENTS
            [
                'title' => 'La Tour Eiffel : Le symbole de Paris',
                'content' => "La Tour Eiffel, construite par Gustave Eiffel pour l'Exposition universelle de 1889, est devenue le monument le plus emblématique de Paris et de la France. Haute de 330 mètres avec ses antennes, elle a été pendant 41 ans le monument le plus haut du monde.\n\nChaque année, près de 7 millions de visiteurs gravissent ses marches ou empruntent ses ascenseurs pour admirer une vue spectaculaire sur la capitale française. La nuit, elle scintille de mille feux pendant 5 minutes chaque heure, offrant un spectacle magique.\n\nOriginellement critiquée par les artistes et intellectuels parisiens, elle est aujourd'hui l'attraction touristique payante la plus visitée au monde. Son architecture métallique audacieuse a révolutionné l'ingénierie de l'époque.",
                'excerpt' => "Monument emblématique de Paris construit en 1889, la Tour Eiffel accueille 7 millions de visiteurs par an et offre une vue spectaculaire sur la capitale.",
                'location' => 'Paris',
                'region' => 'Île-de-France',
                'category' => 'monuments',
                'imageUrl' => 'https://images.unsplash.com/photo-1511739001486-6bfe10ce785f?w=1600&q=80',
            ],
            [
                'title' => 'L\'Arc de Triomphe : Monument de la gloire',
                'content' => "L'Arc de Triomphe de l'Étoile, voulu par Napoléon pour célébrer les victoires de la Grande Armée, domine l'avenue des Champs-Élysées. Haut de 50 mètres et large de 45 mètres, c'est l'un des monuments les plus célèbres de Paris.\n\nConstruit entre 1806 et 1836, l'Arc est orné de sculptures magistrales dont 'La Marseillaise' de François Rude. Les noms de 558 généraux et de grandes victoires sont gravés sur ses parois. Depuis 1920, il abrite la tombe du Soldat inconnu.\n\nDu haut de sa terrasse, on découvre une vue panoramique exceptionnelle sur Paris et les douze avenues qui rayonnent en étoile depuis la place Charles-de-Gaulle. La flamme du souvenir est ravivée chaque soir à 18h30 depuis 1923.",
                'excerpt' => "Commandé par Napoléon, l'Arc de Triomphe célèbre les victoires militaires françaises et abrite la tombe du Soldat inconnu.",
                'location' => 'Paris',
                'region' => 'Île-de-France',
                'category' => 'monuments',
                'imageUrl' => '/images/arctriomphe.jpg',
            ],
            [
                'title' => 'Le Pont du Gard : Aqueduc romain millénaire',
                'content' => "Le Pont du Gard est un pont-aqueduc romain à trois niveaux, construit au Ier siècle pour acheminer l'eau d'Uzès à Nîmes. Avec ses 49 mètres de hauteur et 275 mètres de longueur, c'est le plus haut pont-aqueduc du monde romain.\n\nCe chef-d'œuvre d'ingénierie antique a été construit sans mortier, les blocs de pierre étant parfaitement ajustés. Certains blocs pèsent jusqu'à 6 tonnes. L'aqueduc pouvait transporter jusqu'à 20 000 m³ d'eau par jour.\n\nInscrit au patrimoine mondial de l'UNESCO, le Pont du Gard témoigne du génie architectural romain. Il a traversé les siècles en défiant le temps et les éléments, servant également de pont routier jusqu'au XVIIIe siècle.",
                'excerpt' => "Chef-d'œuvre d'ingénierie romaine du Ier siècle, le Pont du Gard est le plus haut pont-aqueduc du monde romain encore debout.",
                'location' => 'Vers-Pont-du-Gard',
                'region' => 'Occitanie',
                'category' => 'monuments',
                'imageUrl' => '/images/gard.webp',
            ],
            [
                'title' => 'Les Arènes de Nîmes : Amphithéâtre romain',
                'content' => "Les Arènes de Nîmes, construites vers 70 après J.-C., comptent parmi les amphithéâtres romains les mieux conservés au monde. Longues de 133 mètres et larges de 101 mètres, elles pouvaient accueillir 24 000 spectateurs.\n\nL'édifice, inspiré du Colisée de Rome, servait aux combats de gladiateurs et aux chasses d'animaux sauvages. Sa façade de 21 mètres de haut compte deux niveaux de 60 arcades chacun. Le système de circulation permettait l'évacuation des spectateurs en quelques minutes.\n\nAu Moyen Âge, les arènes furent transformées en forteresse puis en quartier d'habitation abritant plus de 2 000 personnes. Restaurées au XIXe siècle, elles accueillent aujourd'hui concerts, spectacles et corridas. Leur acoustique exceptionnelle en fait un lieu prisé pour les événements culturels.",
                'excerpt' => "Amphithéâtre romain du Ier siècle, les Arènes de Nîmes comptent parmi les mieux conservées au monde et accueillaient 24 000 spectateurs.",
                'location' => 'Nîmes',
                'region' => 'Occitanie',
                'category' => 'monuments',
                'imageUrl' => 'https://images.unsplash.com/photo-1682407186023-12c70a4a35e0?w=1600&q=80',
            ],

            // CHÂTEAUX
            [
                'title' => 'Le Château de Versailles : Palais du Roi-Soleil',
                'content' => "Le Château de Versailles, ancienne résidence des rois de France, est un chef-d'œuvre de l'architecture classique française. Construit et agrandi sous Louis XIV, il symbolise la puissance et le faste de la monarchie absolue.\n\nLe château compte 2 300 pièces réparties sur 63 154 m². La célèbre Galerie des Glaces, longue de 73 mètres, est ornée de 357 miroirs et fut le théâtre de nombreux événements historiques, dont la signature du Traité de Versailles en 1919.\n\nLes jardins à la française, dessinés par André Le Nôtre, s'étendent sur 815 hectares. Avec leurs fontaines musicales, leurs bosquets et le Grand Canal, ils constituent un exemple parfait de l'art des jardins du XVIIe siècle.",
                'excerpt' => "Chef-d'œuvre de l'architecture classique, le Château de Versailles fut la résidence du Roi-Soleil et symbolise le faste de la monarchie française.",
                'location' => 'Versailles',
                'region' => 'Île-de-France',
                'category' => 'châteaux',
                'imageUrl' => '/images/versailles.jpg',
            ],
            [
                'title' => 'Les Châteaux de la Loire : Trésors de la Renaissance',
                'content' => "La Vallée de la Loire, surnommée le 'Jardin de la France', abrite plus de 300 châteaux remarquables. Chambord, Chenonceau, Amboise, Blois... chacun raconte une page de l'histoire de France.\n\nLe Château de Chambord, le plus vaste des châteaux de la Loire, fut commandé par François Ier. Il compte 440 pièces, 365 cheminées et 84 escaliers. Son célèbre escalier à double révolution, attribué à Léonard de Vinci, est une prouesse architecturale.\n\nLe Château de Chenonceau, surnommé le 'château des Dames', enjambe élégamment le Cher. Diane de Poitiers et Catherine de Médicis ont marqué son histoire. Sa galerie sur le pont, longue de 60 mètres, offre une vue unique sur la rivière.",
                'excerpt' => "Joyaux de la Renaissance française, les Châteaux de la Loire témoignent du raffinement et de la puissance des rois de France.",
                'location' => 'Vallée de la Loire',
                'region' => 'Centre-Val de Loire',
                'category' => 'châteaux',
                'imageUrl' => '/images/chambord.jpg',
            ],
            [
                'title' => 'La Cité de Carcassonne : Forteresse médiévale',
                'content' => "La Cité de Carcassonne est la plus grande forteresse médiévale d'Europe. Avec ses 52 tours et ses 3 kilomètres de remparts, elle domine la ville moderne depuis 2 500 ans. Inscrite au patrimoine mondial de l'UNESCO, elle attire 4 millions de visiteurs par an.\n\nLa cité a connu une occupation continue depuis le VIe siècle av. J.-C. Les Romains, les Wisigoths, les Sarrasins et les Francs s'y sont succédé. Les doubles remparts, construits entre le XIIIe et le XIVe siècle, ont résisté à de nombreux sièges.\n\nAu XIXe siècle, Viollet-le-Duc entreprit une restauration controversée qui sauva la cité de la ruine. Aujourd'hui, ses ruelles pavées, ses échoppes médiévales et son château comtal offrent un voyage dans le temps.",
                'excerpt' => "Plus grande forteresse médiévale d'Europe, la Cité de Carcassonne impressionne avec ses 52 tours et 3 km de remparts.",
                'location' => 'Carcassonne',
                'region' => 'Occitanie',
                'category' => 'châteaux',
                'imageUrl' => '/images/carcassone.jpg',
            ],
            [
                'title' => 'Le Château de Chambord : Joyau de la Renaissance',
                'content' => "Le Château de Chambord est le plus vaste et le plus majestueux des châteaux de la Loire. Commencé en 1519 sous le règne de François Ier, il incarne l'ambition démesurée du roi et l'influence de la Renaissance italienne.\n\nAvec ses 440 pièces, 365 cheminées et 84 escaliers, Chambord est un chef-d'œuvre architectural. Son escalier à double révolution, chef-d'œuvre d'ingénierie attribué à Léonard de Vinci, permet à deux personnes de monter et descendre sans se croiser.\n\nLe domaine de Chambord s'étend sur 5 440 hectares entourés de 32 km de murs, ce qui en fait le plus grand parc forestier clos d'Europe. Le château, classé au patrimoine mondial de l'UNESCO, accueille plus d'un million de visiteurs chaque année.",
                'excerpt' => "Plus vaste château de la Loire, Chambord fascine par son architecture Renaissance et son célèbre escalier à double révolution.",
                'location' => 'Chambord',
                'region' => 'Centre-Val de Loire',
                'category' => 'châteaux',
                'imageUrl' => '/images/chambord.jpg',
            ],

            // CATHÉDRALES/BASILIQUES
            [
                'title' => 'La Cathédrale Notre-Dame de Paris : Joyau gothique',
                'content' => "La Cathédrale Notre-Dame de Paris, chef-d'œuvre de l'architecture gothique, domine l'Île de la Cité depuis le XIIe siècle. Sa construction a débuté en 1163 sous l'impulsion de l'évêque Maurice de Sully et s'est achevée en 1345.\n\nCélèbre pour ses sculptures, ses vitraux et ses gargouilles, Notre-Dame a inspiré Victor Hugo pour son roman 'Notre-Dame de Paris'. La cathédrale mesure 130 mètres de long et ses tours culminent à 69 mètres. La flèche, reconstruite au XIXe siècle par Viollet-le-Duc, s'élevait à 96 mètres avant l'incendie de 2019.\n\nNotre-Dame a été le théâtre de nombreux événements historiques : couronnement de Napoléon, béatifications, et célébrations nationales. Actuellement en restauration suite à l'incendie, elle devrait rouvrir ses portes en 2024.",
                'excerpt' => "Chef-d'œuvre gothique du XIIe siècle, Notre-Dame de Paris fascine par son architecture audacieuse et son histoire millénaire.",
                'location' => 'Paris',
                'region' => 'Île-de-France',
                'category' => 'cathédrales',
                'imageUrl' => '/images/nddp.jpg',
            ],

            [
                'title' => 'La basilique de fourvière : Basilique à l\'intérieur de la ville',
                'content' => "La basilique de Fourvière est une basilique catholique située à Lyon, en France. Elle est dédiée à la Vierge Marie et est considérée comme l'une des plus grandes basiliques de France. Elle est classée monument historique depuis 1840.",
                'excerpt' => "Basilique catholique située à Lyon, en France. Elle est dédiée à la Vierge Marie et est considérée comme l'une des plus grandes basiliques de France.",
                'location' => 'Fourvière, Lyon',
                'region' => 'Auvergne-Rhône-Alpes',
                'category' => 'cathédrales',
                'imageUrl' => '/images/fourviere.webp',
            ],
            [
                'title' => 'La Cathédrale de Reims : Sacre des rois',
                'content' => "La Cathédrale Notre-Dame de Reims est un chef-d'œuvre de l'art gothique. Construite au XIIIe siècle, elle fut pendant des siècles le lieu du sacre des rois de France. Pas moins de 33 rois y ont été couronnés, de Louis VIII en 1223 à Charles X en 1825.\n\nLa cathédrale se distingue par sa statuaire exceptionnelle : plus de 2 300 sculptures ornent sa façade, dont le célèbre 'Ange au sourire'. Ses dimensions impressionnent : 149 mètres de long et des tours culminant à 81 mètres.\n\nGravement endommagée lors de la Première Guerre mondiale, la cathédrale fut entièrement restaurée grâce notamment aux dons américains. Ses vitraux, dont certains créés par Marc Chagall en 1974, illuminent l'édifice d'une lumière féerique. Inscrite au patrimoine mondial de l'UNESCO, elle accueille plus d'un million de visiteurs par an.",
                'excerpt' => "Lieu de sacre de 33 rois de France, la Cathédrale de Reims est un chef-d'œuvre gothique orné de plus de 2 300 sculptures.",
                'location' => 'Reims',
                'region' => 'Grand Est',
                'category' => 'cathédrales',
                'imageUrl' => '/images/reims.jpg',
            ],


            // DÉCORS / SITES NATURELS
            [
                'title' => 'Le Mont-Saint-Michel : Merveille de l\'Occident',
                'content' => "Le Mont-Saint-Michel, situé en Normandie, est une île rocheuse granitique sur laquelle s'élève une abbaye bénédictine dédiée à l'archange Saint Michel. Inscrit au patrimoine mondial de l'UNESCO, il est l'un des sites touristiques les plus visités de France.\n\nL'abbaye, fondée en 708, domine le rocher à 80 mètres de hauteur. Le village médiéval qui l'entoure a conservé son authenticité avec ses ruelles étroites et ses maisons anciennes. Le site est célèbre pour ses marées spectaculaires, parmi les plus grandes d'Europe, qui peuvent varier de 15 mètres.\n\nLe Mont-Saint-Michel a résisté à de nombreux sièges pendant la guerre de Cent Ans. Son architecture défensive et religieuse en fait un chef-d'œuvre unique de l'art médiéval.",
                'excerpt' => "Merveille médiévale de Normandie, le Mont-Saint-Michel est une abbaye perchée sur un îlot rocheux, célèbre pour ses marées spectaculaires.",
                'location' => 'Normandie',
                'region' => 'Normandie',
                'category' => 'décors',
                'imageUrl' => '/images/msm.jpg',
            ],
            [
                'title' => 'Les Jardins de Versailles : Art à la française',
                'content' => "Les Jardins de Versailles, chef-d'œuvre d'André Le Nôtre, s'étendent sur 815 hectares. Conçus pour magnifier le Château de Versailles, ils incarnent l'art des jardins à la française du XVIIe siècle.\n\nLes jardins comptent plus de 50 fontaines et bassins, dont les célèbres fontaines musicales qui s'animent au son de la musique baroque. Le Grand Canal, long de 1,6 km, servait au roi pour ses promenades en gondole vénitienne.\n\nParmi les bosquets remarquables : le Bosquet de la Colonnade avec ses 32 colonnes de marbre, le Bosquet de l'Encelade et sa fontaine spectaculaire. Les jardins abritent également le domaine de Trianon et le hameau de la Reine, refuge champêtre de Marie-Antoinette.",
                'excerpt' => "Chef-d'œuvre d'André Le Nôtre, les Jardins de Versailles s'étendent sur 815 hectares et comptent plus de 50 fontaines.",
                'location' => 'Versailles',
                'region' => 'Île-de-France',
                'category' => 'décors',
                'imageUrl' => '/images/jardin-versailles.webp',
            ],
            [
                'title' => 'Les Gorges du Verdon : Grand Canyon français',
                'content' => "Les Gorges du Verdon constituent le plus grand canyon d'Europe. Creusées par la rivière Verdon, elles s'étendent sur 25 kilomètres avec des falaises atteignant 700 mètres de hauteur. Leur couleur émeraude caractéristique attire chaque année des milliers de visiteurs.\n\nLe site offre des paysages spectaculaires : falaises vertigineuses, eaux turquoise, villages perchés. Les routes panoramiques des deux rives permettent d'admirer des points de vue à couper le souffle comme le Belvédère de la Maline ou le Point Sublime.\n\nLes Gorges du Verdon sont un paradis pour les amateurs de sports nature : escalade, randonnée, canoë-kayak, baignade. Le lac de Sainte-Croix, à l'entrée des gorges, est un lieu prisé pour la navigation et la détente. Le site est également réputé pour sa biodiversité exceptionnelle avec plus de 2 200 espèces végétales.",
                'excerpt' => "Plus grand canyon d'Europe, les Gorges du Verdon éblouissent par leurs eaux émeraude et leurs falaises de 700 mètres.",
                'location' => 'Alpes-de-Haute-Provence',
                'region' => 'Provence-Alpes-Côte d\'Azur',
                'category' => 'décors',
                'imageUrl' => '/images/verdon.webp',
            ],
            [
                'title' => 'Les Falaises d\'Étretat : Arches naturelles',
                'content' => "Les Falaises d'Étretat, sur la côte normande, sont célèbres pour leurs arches naturelles et leur aiguille de craie blanche. Ces formations géologiques spectaculaires ont inspiré de nombreux artistes, dont Monet, Courbet et Maupassant.\n\nL'arche d'Aval et son Aiguille, l'arche d'Amont et la Manneporte forment un ensemble naturel unique. Les falaises, hautes de plus de 80 mètres, offrent des panoramas exceptionnels sur la Manche. À marée basse, on peut se promener sur les galets et admirer les arches depuis la plage.\n\nLes jardins d'Étretat, aménagés au sommet des falaises, combinent art contemporain et végétation sculptée. Le site attire plus de 2 millions de visiteurs par an. La légende raconte que l'Aiguille aurait inspiré Maurice Leblanc pour cacher le trésor d'Arsène Lupin.",
                'excerpt' => "Joyaux de la côte normande, les Falaises d'Étretat fascinent par leurs arches naturelles et leur aiguille de craie.",
                'location' => 'Étretat',
                'region' => 'Normandie',
                'category' => 'décors',
                'imageUrl' => '/images/etretat.jpg',
            ],
            [
                'title' => 'Le Mont-Blanc',
                'content' => "La Sainte-Chapelle, joyau de l'architecture gothique rayonnante, fut construite par Saint Louis entre 1241 et 1248 pour abriter les reliques de la Passion du Christ, dont la Couronne d'épines.\n\nLa chapelle haute, réservée au roi et à sa famille, est célèbre pour ses 15 verrières monumentales de 15 mètres de haut, représentant 1 113 scènes bibliques sur 600 m² de vitraux. Lors des journées ensoleillées, la lumière colorée crée une atmosphère féerique.\n\nChef-d'œuvre de l'art gothique flamboyant, la Sainte-Chapelle semble défier les lois de la gravité avec ses murs de verre soutenus par de fines colonnettes. Sa flèche, haute de 75 mètres, s'élève gracieusement au cœur de l'Île de la Cité.",
                'excerpt' => "Joyau gothique construit par Saint Louis, la Sainte-Chapelle éblouit par ses 600 m² de vitraux du XIIIe siècle.",
                'location' => 'Alpes',
                'region' => 'Auvergne-Rhône-Alpes',
                'category' => 'décors',
                'imageUrl' => '/images/montblanc.jpeg',
            ],

            // MUSÉES
            [
                'title' => 'Le Musée du Louvre : Palais des arts',
                'content' => "Le Musée du Louvre, plus grand musée d'art au monde, occupe l'ancien palais royal situé au cœur de Paris. Avec 60 600 m² d'exposition, il abrite plus de 380 000 œuvres dont 35 000 sont exposées.\n\nLe château fort médiéval du XIIe siècle fut transformé en palais Renaissance par François Ier, puis agrandi par les rois suivants. La pyramide de verre, conçue par l'architecte I.M. Pei et inaugurée en 1989, est devenue l'emblème du musée moderne.\n\nParmi les trésors du Louvre : La Joconde de Léonard de Vinci, la Vénus de Milo, la Victoire de Samothrace, et le Code de Hammurabi. Le musée accueille près de 10 millions de visiteurs par an, ce qui en fait le musée le plus visité au monde.",
                'excerpt' => "Plus grand musée d'art au monde, le Louvre abrite des trésors comme La Joconde et accueille 10 millions de visiteurs par an.",
                'location' => 'Paris',
                'region' => 'Île-de-France',
                'category' => 'monuments',
                'imageUrl' => '/images/louvre.jpg',
            ],
            [
                'title' => 'Le Palais des Papes d\'Avignon : Forteresse pontificale',
                'content' => "Le Palais des Papes d'Avignon est le plus grand palais gothique d'Occident. Résidence des souverains pontifes au XIVe siècle, il s'étend sur 15 000 m² et témoigne de la puissance de l'Église catholique.\n\nConstruit en moins de vingt ans à partir de 1335, le palais est à la fois forteresse et palais. Ses murs de 3 à 4 mètres d'épaisseur et ses tours massives pouvaient résister aux sièges. Neuf papes s'y sont succédé entre 1309 et 1423.\n\nLe palais abrite des fresques remarquables du XIVe siècle, notamment dans la chapelle Saint-Jean. Ses salles immenses, comme la Grande Audience pouvant accueillir 700 personnes, impressionnent par leurs dimensions. Chaque année, il accueille le prestigieux Festival d'Avignon.",
                'excerpt' => "Plus grand palais gothique d'Europe, le Palais des Papes fut la résidence des souverains pontifes au XIVe siècle.",
                'location' => 'Avignon',
                'region' => 'Provence-Alpes-Côte d\'Azur',
                'category' => 'châteaux',
                'imageUrl' => '/images/pdp.jpg',
            ],
        ];

        $articles = [];
        foreach ($articlesData as $index => $data) {
            $article = new Article();
            $article->setTitle($data['title']);
            $article->setSlug($this->slugger->slug($data['title'])->lower()->toString());
            $article->setContent($data['content']);
            $article->setExcerpt($data['excerpt']);
            $article->setLocation($data['location']);
            $article->setRegion($data['region']);
            $article->setCategory($data['category']);
            $article->setImageUrl($data['imageUrl']);
            $article->setPublished(true);
            $article->setAuthor($admin);
            
            // Dates variées pour avoir des articles récents et anciens
            $daysAgo = $index * 3;
            $article->setCreatedAt(new \DateTimeImmutable("-{$daysAgo} days"));
            $article->setUpdatedAt(new \DateTimeImmutable("-{$daysAgo} days"));

            $manager->persist($article);
            $articles[] = $article;
        }

        // Ajouter des commentaires sur quelques articles
        $commentsData = [
            ['author' => 'Marie Laurent', 'email' => 'marie@example.com', 'content' => 'Magnifique article ! J\'ai visité ce monument l\'année dernière et c\'était extraordinaire.'],
            ['author' => 'Pierre Dubois', 'email' => 'pierre@example.com', 'content' => 'Merci pour ces informations détaillées. J\'ai hâte de découvrir ce lieu.'],
            ['author' => 'Sophie Martin', 'email' => 'sophie@example.com', 'content' => 'Les photos sont sublimes ! Cela donne vraiment envie d\'y aller.'],
            ['author' => 'Thomas Bernard', 'email' => 'thomas@example.com', 'content' => 'Article très intéressant et bien documenté. Bravo !'],
            ['author' => 'Julie Petit', 'email' => 'julie@example.com', 'content' => 'J\'y suis allé avec ma famille, c\'était une expérience inoubliable.'],
        ];

        foreach ($articles as $index => $article) {
            // Ajouter 2-3 commentaires par article
            $numComments = rand(2, 3);
            for ($i = 0; $i < $numComments; $i++) {
                $commentData = $commentsData[array_rand($commentsData)];
                $comment = new Comment();
                $comment->setAuthorName($commentData['author']);
                $comment->setAuthorEmail($commentData['email']);
                $comment->setContent($commentData['content']);
                $comment->setArticle($article);
                $comment->setApproved(true);
                $comment->setCreatedAt(new \DateTimeImmutable("-" . rand(1, 30) . " days"));
                
                $manager->persist($comment);
            }
        }

        $manager->flush();
    }
}
