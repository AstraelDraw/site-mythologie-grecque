<?php

include('include/twig.php');
$twig = init_twig();
include('include/JAP_data1-dieux.php');
include('include/JAP_data-accueil.php');
include('include/JAP_data-content.php');

echo $twig->render('modele-cat1.twig', [
    'titre' => '神々のパンテオン',
    'titre2' => 'ギリシャ神話',
    'navigation' => $navigation,
    'nb_dieux' => $nb_dieux,
    'ancres' => $ancre_cat1,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
    'parents' => '親 :',
    'pouvoirs' => '力 :',
    'soustitre' => 'これらの強力な神々に出会いましょう :',
    'lang' => 'FR',
    'switch' => 'EN_page2-categorie1.php',
    'switchlabel' => 'ENG',
    'labelalt' => 'Category 1 English',
    'switchlabel2' => 'FR',
    'switch2' => 'page2-categorie1.php',
    'labelalt2' => 'カテゴリ1 日本語',
]);
?>
