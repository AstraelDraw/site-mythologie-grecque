<?php

include('include/twig.php');
$twig = init_twig();
include('include/data2-lieux.php');
include('include/data-accueil.php');
include('include/data-content.php');

echo $twig->render('modele-cat2.twig', [
    'titre' => 'Lieux légendaires',
    'titre2' => 'La Mythologie Grecque',
    'nb_lieux' => $nb_lieux,
    'navigation' => $navigation,
    'ancres' => $ancre_cat2,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
    'soustitre' => 'Affichage des lieux :',
    'lang' => 'FR',
    'switchlabel' => 'ENG',
    'labelalt' => 'Catégorie 2 anglais',
    'switch' => 'EN_page3-categorie2.php',
    'switchlabel2' => 'JAP',
    'switch2' => 'JAP_page3-categorie2.php',
    'labelalt2' => 'Catégorie 2 jap',
    'label' => 'Nom Grec :',
    'Lieu' => '📍 Location :',
    'desc' => '📜 Description :',
    'facts' => '⚡ Fait Intéressant :',
    'dieux' => 'Dieux Associés :',
    'type' => 'Type de Lieu :',
    'soustitre2' => 'Localisation sur Google Maps',
    'message' => 'Ces lieux ne sont pas liés aux lieux mythologiques. J\'ai simplement voulu tester l\'intégration d\'une carte
    interractive.',
]);
