<?php

include('include/twig.php');
$twig = init_twig();
include('include/EN_data-accueil.php');
include('include/EN_data-content.php');
include('include/EN_data-content.php');

echo $twig->render('propos.twig', [
    'titre' => 'About',
    'titre2' => 'Greek Mythology',
    'titre3' => 'Terms and Conditions (T&C)',
    'titres' => $titres,
    'navigation' => $navigation,
	'footer1' => $footer1,
	'footer2' => $footer2,
	'footer3' => $footer3,
    'lang' => 'EN',
    'switch' => 'page5-propos.php',
    'switchlabel' => 'FR',
    'labelalt' => 'About in French',
    'switchlabel2' => 'JAP',
	'switch2' => 'JAP_page5-propos.php',
	'labelalt2' => 'Propos jap',
]);

