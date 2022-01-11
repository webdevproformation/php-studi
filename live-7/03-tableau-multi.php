<?php 
// tableau multi dimensionnel 
// mixer tableau indexé avec des tableaux associatifs
$page = [
    "titre" => "Article numéro 1" ,
    "contenu" => "lorem ipsum" ,
    "auteur" => [ 
        "prenom" => "Victor",
        // index  => valeur 
        // => deux lettres du clavier qui doivent OBLIGATOIREMENT être collées 
        "nom"    => "Hugo"
    ],
    "categories" => ["PHP" , "html" , "css"],
    "sommaire" => [
        [ "lorem ispum 1" , "conclusion" ],
        [ "lorem ispum 2" , "conclusion 2" ],
    ]
] ; // 11 valeurs stockées dans 1 seule variable 
// Hugo
echo $page["auteur"]["nom"] . "<br>";
echo $page["categories"][2] . "<br>"; // css
echo $page["categories"][count($page["categories"]) - 1] . "<br>";  
echo $page["sommaire"][1][1] ."<br>"; //  "conclusion 2"

