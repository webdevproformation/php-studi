<?php 

// loop === boucle 
// il est possible de faire répéter des instructions sans avoir à les écrire plusieurs fois 

// écrire 1 fois une instruction 
// => php qui exécuter cette instruction plusieurs fois (sans avoir à l'écrire plusieurs fois )

// for(){}
// dans les parenthèses de for ()
// 3 instructions 
// $i = 0 ; // créer une variable $i = 0 ; itérateur 
// $i < 3 ; // boolean => condition de sortie de la boucle
// tant que la condition est true => exécutéer les instructions dans les accolades de la boucle for 
// si c'est false => sortie de la boucle 
// $i++ ; $i = $i + 1 ; $i += 1 => incrémentation augmente la valeur de $i de + 1 et on restocke le résultat dans $i
for($i = 0; $i < 3 ; $i++ ){
    //      0  < 3 => true 
    //              $i = $i + 1 
    //              $i = 0 + 1 
    //              $i = 1
    //      1 < 3 => true 
    //              $i = $i + 1 
    //              $i = 1 + 1 
    //              $i = 2    
    //      2 < 3 => true
    //              $i = $i + 1 
    //              $i = 2 + 1 
    //              $i = 3
    //      3 < 3 => false            
    echo "$i<br>"; 
}

// si on voudrait executer deux fois ce code, on ferait une boucle imbriquée? 
for($i = 0 ; $i <2; $i++){
    for($j = 0; $j<3 ; $j++){
        echo $j.'<br>';
    }
}


// while(){}
// for 3 instructions créer une variable / condition de sortie / incrément

$j = 2 ;
while($j < 12){
    $j += 2; 
    var_dump($j); 
}

// condition de sortie => centrale pour les boucles
/* $k = 13;
while($k > 12){ // la condition de sortie est TOUJOURS true => boucle infinie 
    var_dump($k); 
    $k++;
}
 */

// cas particulier pour les tableaux (parcourir un tableau)
// foreach(){}


$jours = ["lundi", "mardi", "mercredi"] ;

for($i = 0 ; $i < count($jours) ; $i++){
    var_dump($jours[$i]);
}

foreach($jours as $jour){ // alias fait la même chose mais écrit moins
    var_dump($jour); 
}

$sommaire = [
    "partie1" => "introduction à php",
    "partie2" => "les variables primitives",
    "partie3" => "conclusion"
];

/* for($i = 0 ; $i < count($sommaire) ; $i++){
    var_dump($sommaire[$i]);
} 
Warning: Undefined array key 0 1 2
*/

foreach($sommaire as $texte){
    var_dump($texte);
}

foreach($sommaire as $cle => $texte){
    var_dump($cle , $texte);
}


foreach($sommaire as $cle => $texte){
    if($cle != "partie1"){
        var_dump($sommaire[$cle]); 
    }
    // var_dump($texte); // idem que la ligne prédécente
}