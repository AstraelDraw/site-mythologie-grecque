<?php

include('include/twig.php');
$twig = init_twig();
include('include/EN_data2-lieux.php');
include('include/EN_data-accueil.php');
include('include/EN_data-content.php');

echo $twig->render('modele-cat2.twig', [
    'titre' => 'Legendary Places',
    'titre2' => 'Greek Mythology',
    'nb_lieux' => $nb_lieux,
    'navigation' => $navigation,
    'ancres' => $ancre_cat2,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
    'soustitre' => 'Displaying locations:',
    'lang' => 'EN',
    'switchlabel' => 'FR',
    'labelalt' => 'Catégorie 2 français',
    'switch' => 'page3-categorie2.php',
    'switchlabel2' => 'JAP',
    'switch2' => 'JAP_page3-categorie2.php',
    'labelalt2' => 'Catégorie 2 jap',
    'label' => 'Greek Name:',
    'Lieu' => '📍 Location:',
    'desc' => '📜 Description:',
    'facts' => '⚡ Interesting Fact:',
    'dieux' => 'Associated Gods:',
    'type' => 'Type of Place:',
    'soustitre2' => 'Location on Google Maps',
    'message' => 'These locations are not related to mythical places. I just wanted to test the integration of an interactive map.',
]);
