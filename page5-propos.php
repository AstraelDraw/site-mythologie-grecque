<?php

include('include/twig.php');
$twig = init_twig();
include('include/data-accueil.php');
include('include/data-content.php');
include('include/data-content.php');

echo $twig->render('propos.twig', [
    'titre' => 'À propos',
	'titre2' => 'La Mythologie Grecque',
	'titre3' => 'Conditions Générales d\'Utilisation (CGU)',
	'titres' => $titres,
	'navigation' => $navigation,
	'footer1' => $footer1,
	'footer2' => $footer2,
	'footer3' => $footer3,
	'lang' => 'FR',
	'switch' => 'EN_page5-propos.php',
	'switchlabel' => 'ENG',
	'labelalt' => 'Propos anglais',
	'switchlabel2' => 'JAP',
	'switch2' => 'JAP_page5-propos.php',
	'labelalt2' => 'Propos jap',
]);
