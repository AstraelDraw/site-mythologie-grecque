<?php

include('include/twig.php');
$twig = init_twig();
include('include/data1-dieux.php');
include('include/data-accueil.php');
include('include/data-content.php');

echo $twig->render('modele-cat1.twig', [
    'titre' => 'Panthéon des Dieux',
    'titre2' => 'La Mythologie Grecque',
    'navigation' => $navigation,
    'nb_dieux' => $nb_dieux,
    'ancres' => $ancre_cat1,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
    'parents' => 'Parents :',
    'pouvoirs' => 'Pouvoirs :',
    'soustitre' => 'Rencontrez ces puissantes divinités :',
	'lang' => 'FR',
    'switch' => 'EN_page2-categorie1.php',
    'switchlabel' => 'ENG',
    'labelalt' => 'Catégorie 1 anglais',
    'switchlabel2' => 'JAP',
    'switch2' => 'JAP_page2-categorie1.php',
    'labelalt2' => 'Catégorie 1 jap',
]);
