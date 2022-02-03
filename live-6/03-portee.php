<?php 

$a = 10 ; // créer une variable à l'extérieur des { }
// de la création de la fonction test
// $a portée globale et elle n'a pas accès la portée (contexte) de la fonction

function test(){
    global $a; // utilise la variable $a qui est dans la portée globale
    var_dump($a); // 10
    $a = "toto"; // modification de la valeur stockée dans $a
    // Warning: Undefined variable $a 
}

test(); 
var_dump($a); // toto

// $b = "tata";



function test2(){
     $b = 33 ; // variable portée locale n'existe QUE dans la déclaration de la fonction
    var_dump($b);
    return $b ; // récupérer des informations stockées dans la fonction pour les utiliser à l'extérieur des accolades de la fonction
}

var_dump("ici" , $b); 

$resultat = test2();  // récupérer la valeur stockée dans la variable $b qui est dans la fonction test2 à stocker dans la variable $resultat

var_dump($resultat) ; // Warning: Undefined variable $b 
// $b est protégée dans la fonction une fois créer elle est inaccessible 

