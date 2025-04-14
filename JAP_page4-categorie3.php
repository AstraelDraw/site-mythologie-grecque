<?php

include('include/twig.php');
$twig = init_twig();
include('include/JAP_data3-livres.php');
include('include/JAP_data-accueil.php');
include('include/JAP_data-content.php');

echo $twig->render('modele-cat3.twig', [
    'titre' => '神話と物語',
    'titre2' => 'ギリシャ神話',
    'soustitre' => '本の表示：',
    'soustitre2' => 'コメントセクション：',
    'nb_livres' => $nb_livres,
    'navigation' => $navigation,
    'ancres' => $ancre_cat3,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
		'lang' => 'FR',
    'comm' => 'コメントを書く...',
    'switch' => 'EN_page4-categorie3.php',
    'switchlabel' => 'ENG',
    'labelalt' => 'カテゴリー3 英語',
    'switchlabel2' => 'FR',
    'switch2' => 'page4-categorie3.php',
    'labelalt2' => 'カテゴリー3 日本語',
    'par' => '著者',
    'Envoi' => '送信'
]);

