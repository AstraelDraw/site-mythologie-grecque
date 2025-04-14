<?php

include('include/twig.php');
$twig = init_twig();
include('include/JAP_data2-lieux.php');
include('include/JAP_data-accueil.php');
include('include/JAP_data-content.php');

echo $twig->render('modele-cat2.twig', [
    'titre' => '伝説の場所',
    'titre2' => 'ギリシャ神話',
    'nb_lieux' => $nb_lieux,
    'navigation' => $navigation,
    'ancres' => $ancre_cat2,
    'footer1' => $footer1,
    'footer2' => $footer2,
    'footer3' => $footer3,
    'soustitre' => '場所の表示：',
    'lang' => 'FR',
    'switchlabel' => 'ENG',
    'labelalt' => 'カテゴリー2 英語',
    'switch' => 'EN_page3-categorie2.php',
    'switchlabel2' => 'FR',
    'switch2' => 'page3-categorie2.php',
    'labelalt2' => 'カテゴリー2 日本語',
    'label' => 'ギリシャ名：',
    'Lieu' => '📍 場所：',
    'desc' => '📜 説明：',
    'facts' => '⚡ 興味深い事実：',
    'dieux' => '関連する神々：',
    'type' => '場所の種類：',
    'soustitre2' => 'Google マップでの位置',
    'message' => 'これらの場所は神話的な場所とは関係ありません。ただ、インタラクティブな地図の統合を試してみたかっただけです。',
]);

