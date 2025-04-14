<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-accueil.php');
include('include/data-content.php');


echo $twig->render('base.twig', [
	'titre' => 'Accueil',
	'titre2' => 'La Mythologie Grecque',
	'navigation' => $navigation,
        'footer1' => $footer1,
        'footer2' => $footer2,
        'footer3' => $footer3,
        'ancres' => $ancre_accueil,
        'switchlabel' => 'ENG',
        'switch' => 'EN_page1-accueil.php',
        'labelalt' => 'Page d\'accueil',
        'switchlabel2' => 'JAP',
        'switch2' => 'JAP_page1-accueil.php',
        'labelalt2' => 'Page d\'accueil',
	'soustitre' => 'Découvrez l\'histoire facinante de la mythologie grecque à travers ce site.',
	'soustitre2' => 'En parcourant le Panthéon des Dieux',
	'soustitre3' => 'En marchant dans les pas des héros.',
        'soustitre4' => 'En plongeant dans des histoires poignantes.',
	'p1' => 'Entrez dans l\'univers divin où les puissants dieux et déesses de la mythologie grecque règnent sur les cieux,
                les mers et les enfers. Chaque divinité porte en elle une histoire millénaire, une influence
                profonde
                sur
                l\'humanité et un pouvoir qui défie les lois de la nature. Du majestueux Zeus, roi des dieux, à
                l\'intrigante
                Aphrodite, déesse de l\'amour et de la beauté, plongez dans l\'univers fascinant où la mythologie
                prend
                vie à
                travers des récits d\'héroïsme, de passion et de conflits éternels. Découvrez leur influence sur les
                mortels,
                leur interaction avec les héros légendaires et l\'impact indélébile qu\'ils ont laissé sur notre
                culture.
                Bienvenue dans le Panthéon des Dieux, un voyage mystique au cœur des légendes.',
	'p2' => 'Les lieux mythologiques sont aussi importants que les dieux eux-mêmes dans la culture grecque
                        antique. Chaque lieu possède une histoire unique, imprégnée de mystère et de puissance divine.
                        Du Mont Olympe, résidence des dieux, aux sombres profondeurs du Tartare, chaque endroit raconte
                        une légende fascinante. Les Champs Élysées symbolisent la récompense ultime, un paradis où les
                        âmes des héros reposent en paix. Le Labyrinthe de Crète, avec ses sinueux couloirs, cache un
                        mystère redoutable, tandis que les Plaines d\'Asphodèle, où résident les âmes des défunts,
                        rappellent la fragilité de la vie. Découvrez ces lieux mythiques et plongez dans un monde où la
                        réalité et le surnaturel se mêlent.',
	'p3' => 'Explorez notre sélection de livres captivants sur la mythologie. Plongez dans les récits
                        légendaires des dieux et héros antiques, découvrez les mystères des civilisations passées et
                        laissez-vous emporter par des histoires fascinantes qui mêlent histoire, croyances et aventure.
                        Que vous soyez passionné par les mythes grecs, les sagas épiques ou les récits modernes inspirés
                        des légendes antiques, vous trouverez ici des ouvrages incontournables qui éveilleront votre
                        imagination et enrichiront vos connaissances. Chaque livre est une porte ouverte vers un monde
                        ancien où les dieux et les mortels s\'affrontent, s\'aiment et s\'influencent.',
	'esp' => '>>En savoir plus',
        'accueil' => 'page1-accueil.php',
        'pantheon' => 'page2-categorie1.php',
        'lieux' => 'page3-categorie2.php',
        'mythes' => 'page4-categorie3.php',
        'propos' => 'page5-propos.php',
        'contact' => 'page6-contact.php',
	'lang' => 'EN',
]);