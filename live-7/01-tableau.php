<?php 

// ancienne méthode pour créer des tableaux (PHP 5 / PHP 7)
$tableau = array(1,2,3,4); 

// nouvelle manière de créers tableaux indexé // associatifs
$tableau2 = [ 1,  2, 3, 4 ] ;
// position => index
//            0 , 1 , 2 , 3

//echo $tableau2 ; // erreur Warning: Array to string conversion

print_r($tableau2);

var_dump($tableau2); 

$saisons = [ "summer" , "automne" , "hiver" , "printemps" ]; 
// tableau indexé 
// 4 valeurs de type string

var_dump($saisons); // afficher le contenu de la variable $saisons

// je vais aller en vacance cet été
$phrase = "je vais aller en vacance cet " . $saisons[0] ; 

echo $phrase . "<br>"; 

// le dernier élément stocké dans la variable $saisons 

echo $saisons[3] . "<br>"; // printemps

echo $saisons[ 4 - 1 ] . "<br>"; // printemps

echo count($saisons) . "<br>"; // 4 le nombre d'éléments dans le tableau 

echo $saisons[ count($saisons) - 1  ] ; // printemps
// afficher le dernier élément / valeur stockée dans la variable $saisons

echo "coucou";
echo 1 ; 
echo false ; 

echo [1,2,3]; // Warning transformer [1,2,3] en string 

$t = ["a", "b"] ;
var_dump($t); // afficher tout le contenu du tableau 

echo $t[1]; 
var_dump($t[0]); // afficher 1 valeur dans le tableau $t

