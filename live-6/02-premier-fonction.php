<?php 

// quelque soit l'ordre d'écriture 
calcul() ;  // exécute les instructions stockées dans la fonction calcul

// créer la fonction => stockage => hoisting
function calcul () {
    $a = 10 ;
    $b = 12 ;
    $c = 15 ;
    var_dump($a + $b + $c );
}
// XAMPP

function boucle (){
    $tableau = ["lundi" , "mardi" , "mercredi"];
    foreach($tableau as $jour){
        if($jour != "lundi"){
            var_dump("attention");
        }
        else {
            var_dump($jour);
        }
    }
}

boucle (); 

function fonction1(){
    var_dump("je suis la fonction 1");
    function fonction2(){
        var_dump("je suis la fonction 2");
    }
    fonction2();
}

fonction1(); 

