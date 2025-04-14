<?php

include('include/twig.php');
$twig = init_twig();
include('include/JAP_data-accueil.php');
include('include/JAP_data-content.php');
include('include/JAP_data-content.php');

echo $twig->render('propos.twig', [
    'titre' => 'について',
	'titre2' => 'ギリシャ神話',
	'titre3' => '利用規約（CGU）',
	'titres' => $titres,
	'navigation' => $navigation,
	'footer1' => $footer1,
	'footer2' => $footer2,
	'footer3' => $footer3,
	'lang' => 'FR',
	'switch' => 'EN_page5-propos.php',
	'switchlabel' => 'ENG',
	'labelalt' => 'Propos 英語',
	'switchlabel2' => 'FR',
	'switch2' => 'page5-propos.php',
	'labelalt2' => 'Propos 日本語',
]);

