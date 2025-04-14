<?php

include('include/twig.php');
$twig = init_twig();
include('include/EN_data-accueil.php');
include('include/EN_data-content.php');

echo $twig->render('contact.twig', [
    'titre' => 'Contact',
    'titre2' => 'Greek Mythology',
    'soustitre' => 'Contact Form',
    'navigation' => $navigation,
	'footer1' => $footer1,
	'footer2' => $footer2,
	'footer3' => $footer3,
    'nom' => 'Name :',
    'email' => 'Email :',
    'msg' => 'Message :',
    'envoi' => 'Send',
    'autrectc' => 'Other contacts :',
    'num' => 'Phone number : XX XX XX XX XX',
    'email2' => 'E-Mail : Lesmythesgrecs@gmail.com',
    'Loc' => 'Location of our company :',
    'lang' => 'FR',
	'switch' => 'page6-contact.php',
	'switchlabel' => 'FR',
	'labelalt' => 'Contact français',
    'contact' => 'page6-contact.php',
    'switchlabel2' => 'JAP',
	'switch2' => 'JAP_page6-contact.php',
	'labelalt2' => 'Contact jap',
]);

