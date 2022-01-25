<?php 

//require "01-bdd.php"; // chemin relatif 

require "C:\\xampp\\htdocs\\php\live-9\\01-bdd.php"; // chemin absolu => chemin par rapport dossier racine de votre système informatique (Window / MacOS )

var_dump(__FILE__); // chemin absolu du fichier .php qui est exécuté
var_dump(dirname(__FILE__));  // chemin absolu du dossier qui contient le fichier php qui est exécuté ! 

// réduire les erreurs de chargement de fichier SI require "relatif.php"; 

// migrer => hébergement !! 

