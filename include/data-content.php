<?php

/*CGU texte statique stocké qui est appelé avec une boucle*/

$titres = [
    ['titre' => '1. Introduction', 'p' => 'Bienvenue sur notre site La Mythologie Grecque. En accédant à ce site, vous acceptez de vous conformer aux présentes Conditions Générales d\'Utilisation. Veuillez les lire attentivement.'],
    ['titre' => '2. Objet', 'p' => 'Les présentes CGU ont pour objet de définir les modalités d\'utilisation du site La Mythologie Grecque. Elles s\'appliquent à tous les utilisateurs qui accèdent à ce site pour toute consultation ou utilisation des services proposés.'],
    ['titre' => '3. Accès au site', 'p' => 'Le site est accessible gratuitement à toute personne disposant d\'une connexion Internet. Le propriétaire du site se réserve le droit de modifier, suspendre ou interrompre l\'accès au site, en tout ou en partie, à tout moment et sans préavis.'],
    ['titre' => '4. Propriété intellectuelle', 'p' => 'Tout le contenu du site La Mythologie Grecque, y compris les textes, images, vidéos, logos, etc., est protégé par les droits de propriété intellectuelle. Vous ne pouvez pas reproduire, distribuer, ou exploiter tout contenu sans autorisation préalable.'],
    ['titre' => '5. Responsabilités de l\'utilisateur', 'p' => 'L\'utilisateur s\'engage à ne pas utiliser le site de manière abusive et à respecter les lois et règlements en vigueur. Il est également responsable de l\'utilisation de ses identifiants de connexion, s\'il en a.'],
    ['titre' => '6. Collecte et traitement des données personnelles', 'p' => 'Nous collectons des informations personnelles dans le cadre de l\'utilisation du site, conformément à notre politique de confidentialité. Nous vous encourageons à lire notre politique de confidentialité pour comprendre comment nous traitons vos données.'],
    ['titre' => '7. Cookies', 'p' => 'Le site utilise des cookies pour améliorer l\'expérience utilisateur et analyser la fréquentation du site. En utilisant ce site, vous consentez à l\'utilisation de ces cookies. Vous pouvez gérer vos préférences de cookies dans votre navigateur.'],
    ['titre' => '8. Liens externes', 'p' => 'Le site peut contenir des liens vers des sites externes. Nous ne sommes pas responsables du contenu ou des pratiques de confidentialité de ces sites.'],
    ['titre' => '9. Modification des CGU', 'p' => 'Nous nous réservons le droit de modifier les présentes CGU à tout moment. Toute modification sera publiée sur cette page, et nous vous encourageons à consulter régulièrement cette page pour rester informé des dernières versions.'],
    ['titre' => '10. Loi applicable et juridiction', 'p' => 'Les présentes CGU sont régies par la législation en vigueur en France. En cas de litige, les tribunaux compétents seront ceux de Strasbourg.'],
    ['titre' => '11. Contact', 'p' => 'Si vous avez des questions concernant ces Conditions Générales d\'Utilisation, vous pouvez nous contacter via la page contact.']
];

/*Tableaux pour le footer (séparés pour l'affichage final)*/

$footer1 = [
    'accueil' => 'page1-accueil.php',
    'pantheon' => 'page2-categorie1.php',
];

$footer2 = [
    'lieux' => 'page3-categorie2.php',
    'mythes' => 'page4-categorie3.php',
];

$footer3 = [
    'propos' => 'page5-propos.php',
    'contact' => 'page6-contact.php',
];

/*Tableaux pour les ancres générés par une boucle pour chaque catégorie*/

$ancre_accueil = [
    ['id' => '#a1', 'label' => 'Dieux'],
    ['id' => '#a2', 'label' => 'Lieux'],
    ['id' => '#a3', 'label' => 'Livres'],
];

$ancre_cat1 = [
    ['id' => '#zeus', 'label' => 'Zeus'],
    ['id' => '#poseidon', 'label' => 'Poséidon'],
    ['id' => '#hades', 'label' => 'Hadès'],
    ['id' => '#athena', 'label' => 'Athéna'],
    ['id' => '#apollon', 'label' => 'Apollon'],
    ['id' => '#aphrodite', 'label' => 'Aphrodite'],
];

$ancre_cat2 = [
    ['id' => '#mont_olympe', 'label' => 'Mont Olympe'],
    ['id' => '#champs_elysees', 'label' => 'Champs Élysées'],
    ['id' => '#tartare', 'label' => 'Tartare'],
    ['id' => '#fleuve_styx', 'label' => 'Fleuve Styx'],
    ['id' => '#labyrinthe_crete', 'label' => 'Labyrinthe de Crète'],
];

$ancre_cat3 = [
    ['id' => '#livre1', 'label' => 'Le Chant d’Achille'],
    ['id' => '#livre2', 'label' => 'Mythos : Les Mythes Grecs'],
    ['id' => '#livre3', 'label' => 'Les Métamorphoses'],
    ['id' => '#livre4', 'label' => 'Norse Mythology'],
    ['id' => '#livre5', 'label' => 'Les Héros de l’Olympe'],
];