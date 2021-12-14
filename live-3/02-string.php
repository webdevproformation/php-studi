<?php 

$prenom = "Victor";
$nom = "Hugo" ; 

// additionner deux variables qui contiennent du string => concaténation

// . 

$auteurFr = $prenom . " " . $nom; 

var_dump($auteurFr);

// javascript + 

// $auteurFr2 = $prenom + " " + $nom ;

// Fatal error: Uncaught TypeError: Unsupported operand types: string + string 

// Victor Hugo a écrit les Misérables 

$phrase1 = $prenom . " " . $nom . " a écrit les Misérables" ;

var_dump($phrase1); 

$phrase2 = "$prenom $nom a écrit les Misérables"; // fonctionne QUE "" 

var_dump($phrase2);

$phrase3 = '$prenom $nom a écrit les Misérables';

var_dump($phrase3); 

$articleHtml = "
    <h2>$prenom $nom</h2>
    <p>lorem ipsum</p>
";

var_dump($articleHtml); 

$listeHtml = '
<ul>
    <li>Pomme</li>
    <li>$prenom</li>
    <li>Poire</li>
</ul>
';

var_dump($listeHtml); 

// javascript il est possible via `` backtick (n'existe pas en PHP)

define("URL" , "http://google.fr");

var_dump(URL);

$action = "je vais sur " . URL ; 

var_dump($action); 

// opérateur unaire pour les concaténations sur PHP 
// .=

$page = "<h1>titre page </h1>\n"; // \n new line
$page = $page . "<p>lorem ipsum</p>\n";
$page .= "<p>lorem ipsum</p>";

var_dump($page); 


// {}

$a = "hello";
$b = "les amis";

$salutation = "$a $b" ; 
var_dump($salutation); 

$salutation2 = "{$a} {$b}" ; 
var_dump($salutation2); 


// tableau 
$options = [
    "largeur" => 20 ,
    "hauteur" => 10 ,
    "unite" => "px"
];

// la fenêtre a une largeur de 20px

$infos = "la fenêtre a une largeur de " . $options["largeur"] . $options["unite"];
var_dump($infos); 

$infos2 = "la fenêtre a une largeur de {$options["largeur"]} {$options["unite"]}";

var_dump($infos2); 

// $infos3 = "la fenêtre a une largeur de $options['largeur'] $options['unite']";

// var_dump($info3);


// constante PHP PHP_EOL => End of Line

$z = "bonjour" . PHP_EOL . "coucou"; 
var_dump($z);
$z = "bonjour\ncoucou"; 
var_dump($z);

$presentation = "coucou <br> comment \n allez vous <br> les amis";

echo $presentation ; 
echo( $presentation ); 

// require 

var_dump($presentation); 



// opération de base MAIS CENTRAL opérations de nombre et les chaines de caractères 
// 





