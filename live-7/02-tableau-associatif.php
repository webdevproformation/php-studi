<?php 

$tableau_indexe = [ "lundi" , "mardi" , "mercredi" ] ;
//                    0          1         2
var_dump($tableau_indexe); 

$tableau_associatif = [ 
        "premier" => "lundi"  ,
        // index  =>  valeur
        "deuxieme" => "mardi" ,
        "dernier"  => "mercredi"
];

var_dump($tableau_associatif); 

echo $tableau_associatif["dernier"]; 

$tableau_special = [
    "first" => "elément 2",
    0 => "élément1" ,
    "second" => "élément 3",
    "4" => "element final"
];

var_dump($tableau_special);

echo $tableau_special[0] ."<br>"; // élément1 
echo $tableau_special["second"] ."<br>"; //  élément 3
echo $tableau_special[4] ."<br>"; // element final
echo $tableau_special["4"] ."<br>"; // element final

// 

