<?php 

// toutes les fonctions qui génèrent du html 

// helper => fonction qui va générer une partie de la page html
function renderNavBar(){
    return "
        <nav>
            <img src=\"https://via.placeholder.com/100x50?text=logo\" alt=\"\">
            <a href=\"01-accueil.php\">Accueil</a>
            <a href=\"01-contact.php\">Nous contacter</a>
            <a href=\"01-connexion.php\">Connexion</a>
        </nav>
    ";
}

function renderPiedPage(){
    require_once "01-const.php" ; 
    global $DOMAIN ; 
    return $DOMAIN ; 
}