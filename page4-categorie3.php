<?php

include('include/twig.php');
$twig = init_twig();
include('include/data3-livres.php');
include('include/data-accueil.php');
include('include/data-content.php');

echo $twig->render('modele-cat3.twig', [
    'titre' => 'Mythes et récits',
    'titre2' => 'La Mythologie Grecque',
    'soustitre' => 'Affichage des livres :',
    'soustitre2' => 'Section commentaires :',
    'nb_livres' => $nb_livres,
    'navigation' => $navigation,
    'ancres' => $ancre_cat3,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
		'lang' => 'FR',
    'comm' => 'Écrire un commentaire...',
    'switch' => 'EN_page4-categorie3.php',
    'switchlabel' => 'ENG',
    'labelalt' => 'Catégorie 3 anglais',
    'switchlabel2' => 'JAP',
    'switch2' => 'JAP_page4-categorie3.php',
    'labelalt2' => 'Catégorie 3 jap',
    'par' => 'Par',
    'Envoi' => 'Envoyer'
]);
