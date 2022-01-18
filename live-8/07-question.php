<?php 

$v = 10 ;

function toto(){
    global $v /* = 30 ERREUR */ ;
    $v = 40 ;  // OK mais pas conseillé
    var_dump($v); 
    /*
    Nathalie ISNARD
    ça rend le code moins maintenable
    */ 
}

function tata($param){ // $paramètre  conseillé 
    var_dump($param);
}
tata($v); // utilise ta variable globale comme argumentde ta fonction 

