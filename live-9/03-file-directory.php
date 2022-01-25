<?php 
// file => fichier
// directory => dossier

// récupérer le contenu d'un fichier test.php 
// qui est dans le dossier assets

// est ce que le dossier assets existe ?? 
// si il n'existe pas => créer
require "01-helper.php";
if(!file_exists("assets")){
    mkdir("assets"); // créer un directory => dossier
}
if(!file_exists("assets/test.php")){
    // créer des fichiers en php 
    //$sommaire = file_get_contents("00-sommaire.txt");
    //$sommaire = str_replace("PHP","Javascript" , $sommaire);
    $menu = renderNavBar();
    file_put_contents("assets/test.php", $menu);
}

// Warning: require(assets/test.php): Failed to open stream: No such file or directory i
require "assets/test.php";