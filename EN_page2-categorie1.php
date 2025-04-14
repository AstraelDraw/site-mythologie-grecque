<?php

include('include/twig.php');
$twig = init_twig();
include('include/EN_data1-dieux.php');
include('include/EN_data-accueil.php');
include('include/EN_data-content.php');

echo $twig->render('modele-cat1.twig', [
    'titre' => 'Pantheon of the Gods',
    'titre2' => 'Greek Mythology',
    'navigation' => $navigation,
    'nb_dieux' => $nb_dieux,
    'ancres' => $ancre_cat1,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
    'parents' => 'Parents:',
    'pouvoirs' => 'Powers:',
    'soustitre' => 'Meet these powerful deities:',
    'lang' => 'EN',
    'switch' => 'page2-categorie1.php',
    'switchlabel' => 'FR',
    'labelalt' => 'Catégorie 2 français',
    'switchlabel2' => 'JAP',
    'switch2' => 'JAP_page2-categorie1.php',
    'labelalt2' => 'Catégorie 1 jap',
]);

