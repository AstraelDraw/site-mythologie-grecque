<?php

include('include/twig.php');
$twig = init_twig();

include('include/EN_data-accueil.php');
include('include/EN_data-content.php');

echo $twig->render('base.twig', [
        'titre' => 'Home',
        'titre2' => 'Greek Mythology',
        'navigation' => $navigation,
        'ancres' => $ancre_accueil,
        'footer1' => $footer1,
        'footer2' => $footer2,
        'footer3' => $footer3,
        'switchlabel' => 'FR',
        'switch' => 'page1-accueil.php',
        'labelalt' => 'Page d\'accueil',
        'switchlabel2' => 'JAP',
        'switch2' => 'JAP_page1-accueil.php',
        'labelalt2' => 'Page d\'accueil',
        'soustitre' => 'Discover the fascinating history of Greek mythology through this site.',
        'soustitre2' => 'By exploring the Pantheon of the Gods',
        'soustitre3' => 'By walking in the footsteps of heroes.',
        'soustitre4' => 'By diving into gripping stories.',
        'p1' => 'Enter the divine universe where the powerful gods and goddesses of Greek mythology reign over the heavens, 
                the seas, and the underworld. Each deity carries an ancient story, a deep influence on humanity, 
                and a power that defies the laws of nature. From the majestic Zeus, king of the gods, to the intriguing 
                Aphrodite, goddess of love and beauty, immerse yourself in the fascinating world where mythology comes to life 
                through tales of heroism, passion, and eternal conflicts. Discover their influence on mortals, 
                their interactions with legendary heroes, and the lasting impact they have left on our culture. 
                Welcome to the Pantheon of the Gods, a mystical journey into the heart of legends.',
        'p2' => 'Mythological places are just as important as the gods themselves in ancient Greek culture. 
                Each location has a unique story, imbued with mystery and divine power. 
                From Mount Olympus, the residence of the gods, to the dark depths of Tartarus, 
                each place tells a fascinating legend. The Elysian Fields symbolize the ultimate reward, 
                a paradise where the souls of heroes rest in peace. The Labyrinth of Crete, with its winding corridors, 
                hides a formidable mystery, while the Asphodel Meadows, where the souls of the deceased reside, 
                remind us of the fragility of life. Discover these mythical places and immerse yourself in a world 
                where reality and the supernatural intertwine.',
        'p3' => 'Explore our selection of captivating books on mythology. Dive into the legendary tales 
                of ancient gods and heroes, uncover the mysteries of past civilizations, 
                and let yourself be carried away by fascinating stories that blend history, beliefs, and adventure. 
                Whether you are passionate about Greek myths, epic sagas, or modern stories inspired by ancient legends, 
                you will find here essential works that will spark your imagination and enrich your knowledge. 
                Each book is an open door to an ancient world where gods and mortals clash, love, and influence each other.',
        'esp' => '>>Learn more',
        'accueil' => 'EN_page1-accueil.php',
        'pantheon' => 'EN_page2-categorie1.php',
        'lieux' => 'EN_page3-categorie2.php',
        'mythes' => 'EN_page4-categorie3.php',
        'propos' => 'EN_page5-propos.php',
        'contact' => 'EN_page6-contact.php',
        'lang' => 'EN',
]);

