<?php 
$fruits = ["pomme", "poire" , "abricot" , "fraise"];

array_splice($fruits  , 1 , 2) ;
//["pomme"  , "fraise"]

// unset($fruits[1])
// unset($fruits[2])

var_dump($fruits); 

$arbres = ["chêne", "sapin", "boulot" , "hêtre"];

// array_splice($arbres , 3);
// array_splice($arbres , count($arbre) - 1);
array_pop($arbres); //["chêne", "sapin", "boulot" ]
var_dump($arbres); 

array_shift($arbres); // ["sapin", "boulot"]

$budget = [10 , 20 , 100] ; 

$total = 0;
for($i = 0 ; $i < count($budget) ; $i++){
    $total += $budget[$i] ;
}
echo $total . "<br>"; 

echo array_sum($budget) . "<br>"; 

// est ce que valeur est bien présent dans un tableau ??? 

$courses = ["pomme", "poire" , "abricot" , "fraise"];

// est ce que j'ai bien mis dans la liste des courses fraises 

$estQueFraiseEcrit = in_array("fraise" , $courses ) ;

echo $estQueFraiseEcrit . "<br>"; // 1 


$estQueTomateEcrit = in_array("tomates" , $courses ) ;

echo $estQueTomateEcrit . "<br>"; // false // rien

var_dump($estQueTomateEcrit ); 


$tableau = ["fille" , "garçon" , "parent" , "oncle"];

echo $tableau[0];

echo current($tableau); // 1er élément d'un tableau

echo end($tableau) ; // dernier élément d'une tableau 


$liste = [
    "toto" => "Alain",
    "tata" => "Doe",
    "adresse" => "75 rue du Paradis"
]; 

var_dump(array_key_exists("telephone" , $liste)); // false
var_dump(array_key_exists("tata" , $liste)); // true


$t = [1,2];

//array_splice($t , 1 , 0, "a");
var_dump($t); 

for($i = 0 ; $i < count($t) ; $i++){
    $t[$i] .= " coucou"; 
}

var_dump($t); 
