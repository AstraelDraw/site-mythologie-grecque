<?php

include('include/twig.php');
$twig = init_twig();
include('include/data-accueil.php');
include('include/data-content.php');

echo $twig->render('contact.twig', [
    'titre' => 'Contact',
	'titre2' => 'La Mythologie Grecque',
	'soustitre' => 'Formulaire de Contact',
	'navigation' => $navigation,
	'footer1' => $footer1,
	'footer2' => $footer2,
	'footer3' => $footer3,
	'nom' => 'Nom :',
	'email' => 'Email :',
	'msg' => 'Message :',
	'envoi' => 'Envoyer',
	'autrectc' => 'Autres contacts :',
	'num' => 'Numéro de téléphone : XX XX XX XX XX',
	'email2' => 'E-Mail : Lesmythesgrecs@gmail.com',
	'Loc' => 'Localisation de notre entreprise :',
	'lang' => 'FR',
	'switch' => 'EN_page6-contact.php',
	'switchlabel' => 'ENG',
	'labelalt' => 'Contact anglais',
	'contact' => 'page6-contact.php',
	'switchlabel2' => 'JAP',
	'switch2' => 'JAP_page6-contact.php',
	'labelalt2' => 'Contact jap',
]);
