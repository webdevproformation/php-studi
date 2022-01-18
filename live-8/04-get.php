<?php 

var_dump($_GET); // vide
$data = []; 

if(!empty($_GET["articles"])){
    echo "requête en base de données table articles <br>";
    $data = ["article1", "article2", "article3"];
}

if(!empty($_GET["categorie"])){
    echo "requête en base de données table categorie <br>";
    $data = ["produit1", "produit2", "produit3"];
}
// permettre de récupérer des informations qui sont stockées dans l'adresse de la page 

// http://localhost/php/live-8/04-get.php
// http://localhost/php/live-8/04-get.php?name=Alain&age=12
// http://localhost/php/live-8/04-get.php?name=Alain&age=12&token=123456789&dt_arrivee=12122022

// passer des informations d'une page vers une autre 

?>
<a href="http://localhost/php/live-8/04-get.php?categorie=jean&tri=desc&critere=prix">accéder la liste de produits</a>
<br>
<a href="http://localhost/php/live-8/04-get.php?articles=php&auteur=Alain">accéder la liste des articles</a>

<?php 
var_dump($data); 