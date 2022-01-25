<?php 

/* require
include  
*/

// vérifier Est ce que le fichier existe ??? avant require / include

$fichier = "00-sommairessss.txt";
// $verif = file_exists($fichier);

if(file_exists($fichier)){
    require $fichier ;
}else {
    echo "attention veuillez créer le fichier $fichier";
}


