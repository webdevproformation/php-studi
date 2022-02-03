<?php 

$variable = "toto";
$variable = 2; 

function calcul(){
    $a = 1 ;
    $b = 2 ;
    var_dump($a + $b);
}

calcul(); // 3

function calcul2(){ // Fatal error: Cannot redeclare calcul()
    $a = 2 ;
    $b = 3 ;
    var_dump($a + $b);
}

calcul2();

// si j'ai besoin de donner une valeur à des variables locales à l'extérieur d'une fonction 

function calcul3( $a ,  $b){ // paramètre de la fonction (déclaration)
    var_dump($a + $b);
    // paramètres de la fonction ont une portée local
}

calcul3( 4 , 5 ); // 9 donner les valeurs de $a et $b au moment de l'exécution du la fonction
// argument de la fonction (valeur des paramètres au moment exécution)

calcul3( 10 , 12 );

calcul3(-5 , 33 );
// dire au 