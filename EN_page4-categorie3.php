<?php

include('include/twig.php');
$twig = init_twig();
include('include/EN_data3-livres.php');
include('include/EN_data-accueil.php');
include('include/EN_data-content.php');

echo $twig->render('modele-cat3.twig', [
    'titre' => 'Myths and Stories',
    'titre2' => 'Greek Mythology',
    'soustitre' => 'Displaying books:',
    'soustitre2' => 'Comments section:',
    'nb_livres' => $nb_livres,
    'navigation' => $navigation,
    'ancres' => $ancre_cat3,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
    'lang' => 'EN',
    'comm' => 'Write a comment...',
    'switch' => 'page4-categorie3.php',
    'switchlabel' => 'FR',
    'labelalt' => 'Catégorie 3 français',
    'switchlabel2' => 'JAP',
    'switch2' => 'JAP_page4-categorie3.php',
    'labelalt2' => 'Catégorie 3 jap',
    'par' => 'By',
    'Envoi' => 'Send'
]);
