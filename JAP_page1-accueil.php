<?php

include('include/twig.php');
$twig = init_twig();

include('include/JAP_data-accueil.php');
include('include/JAP_data-content.php');

echo $twig->render('base.twig', [
	'titre' => 'ホーム',
	'titre2' => 'ギリシャ神話',
	'navigation' => $navigation,
        'footer1' => $footer1,
        'footer2' => $footer2,
        'footer3' => $footer3,
        'ancres' => $ancre_accueil,
        'switchlabel' => 'ENG',
        'switch' => 'EN_page1-accueil.php',
        'labelalt' => 'ホームページ',
        'switchlabel2' => 'FR',
        'switch2' => 'page1-accueil.php',
        'labelalt2' => 'ホームページ',
	'soustitre' => 'このサイトを通じて、ギリシャ神話の魅力的な歴史を発見しましょう。',
	'soustitre2' => '神々のパンテオンを巡って',
	'soustitre3' => '英雄たちの足跡を辿って。',
        'soustitre4' => '感動的な物語に飛び込んで。',
	'p1' => 'ギリシャ神話の神々と女神たちが支配する空、海、冥界の神々の世界に足を踏み入れましょう。各神は千年の歴史を背負い、人間に深い影響を与え、自然の法則を超越する力を持っています。最も威厳のある神々であるゼウス、愛と美の女神アフロディーテまで、神話が命を吹き込まれる世界で、英雄、情熱、永遠の争いの物語を体験してください。彼らの人間との関わり、伝説的な英雄たちとのやり取り、そして私たちの文化に与えた不滅の影響を知ることができます。神々のパンテオンへようこそ、伝説の核心に迫る神秘的な旅へ。',
	'p2' => '神話の場所は神々と同じくらい古代ギリシャ文化において重要です。各地にはユニークな歴史があり、神聖で神秘的な力が宿っています。神々の住まうオリンポス山から、暗黒のタルタロスまで、それぞれの場所は魅力的な物語を伝えています。英雄たちの魂が平和に眠る場所としてエリュシオンの野が示す報酬の象徴、曲がりくねった回廊を持つクレタ島の迷宮は恐ろしい謎を隠しています。アスフォデルの野では亡き者たちの魂が住んでおり、人生の儚さを思い出させます。これらの神話的な場所を発見し、現実と超自然が交差する世界に飛び込んでください。',
	'p3' => 'ギリシャ神話に関する魅力的な本を選びました。古代の神々と英雄たちの伝説に没頭し、過去の文明の神秘を発見し、歴史、信仰、冒険を絡ませた物語に心を奪われましょう。ギリシャ神話、叙事詩、または古代の伝説に触発された現代の物語に興味がある方にとって、ここには想像力をかき立て、知識を深めるための必読書が揃っています。どの本も神々と人間が対立し、愛し合い、影響を与え合う古代の世界への扉を開きます。',
	'esp' => '>>もっと知る',
        'accueil' => 'page1-accueil.php',
        'pantheon' => 'page2-categorie1.php',
        'lieux' => 'page3-categorie2.php',
        'mythes' => 'page4-categorie3.php',
        'propos' => 'page5-propos.php',
        'contact' => 'page6-contact.php',
	'lang' => 'EN',
]);
