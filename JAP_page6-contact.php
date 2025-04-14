<?php

include('include/twig.php');
$twig = init_twig();
include('include/JAP_data-accueil.php');
include('include/JAP_data-content.php');

echo $twig->render('contact.twig', [
    'titre' => '連絡先',
	'titre2' => 'ギリシャ神話',
	'soustitre' => 'お問い合わせフォーム',
	'navigation' => $navigation,
	'footer1' => $footer1,
	'footer2' => $footer2,
	'footer3' => $footer3,
	'nom' => '名前 :',
	'email' => 'メールアドレス :',
	'msg' => 'メッセージ :',
	'envoi' => '送信',
	'autrectc' => 'その他の連絡先 :',
	'num' => '電話番号 : XX XX XX XX XX',
	'email2' => 'E-Mail : Lesmythesgrecs@gmail.com',
	'Loc' => '当社の所在地 :',
	'lang' => 'FR',
	'switch' => 'EN_page6-contact.php',
	'switchlabel' => 'ENG',
	'labelalt' => '連絡先 英語',
	'contact' => 'page6-contact.php',
	'switchlabel2' => 'FR',
	'switch2' => 'page6-contact.php',
	'labelalt2' => '連絡先 日本語',
]);

