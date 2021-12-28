<?php 

// if( condition ){    }


$age = 12 ;

if( $age >= 18 ){
    echo "je suis majeur<br>"; 
}


$distance = "balbla" ; 

if($distance <= 10){ //false
    echo "vous êtes pas loin de chez vous ! "; 
}
elseif($distance <= 50){ // false
    echo "vous êtes près du travail ! "; 
}
elseif($distance <= 150){  // false 
    echo "vous êtes près de la montagne ! "; 
}
elseif($distance <= 250){  // false 
    echo "vous êtes à la plage ! "; 
}
else {
    echo "valeur incorrecte ! <br>"; 
}

// if ternaire

$poids = 50; 
if($poids < 100){
    var_dump('je suis le cas numéro 1 ')  ;
} else {
    var_dump('je suis le cas numéro 2')  ;
}

$texte = "je suis un texte" ; 

echo ($poids < 100) ? $texte : 'je suis le cas numéro 2' ; 
var_dump(($poids < 100) ? 'je suis le cas numéro 1 ' : 'je suis le cas numéro 2') ; 


$stock = 2; 
$isDisponible = ($stock > 10 ) ? $stock : 0; 
var_dump($isDisponible); 

// switch case

$formation = "Apache";

switch( $formation ) {
    
    case "PHP" : // == true 
        echo "j'ai les langages back" ; 
        break ;
    case "javascript" : // == 
        echo "j'adore js" ;
        break ;
    case "css" : // ==
        echo 'je fais mon cv en ligne' ;
        break ;
    default :
        echo 'langage inconnu' ; 
}