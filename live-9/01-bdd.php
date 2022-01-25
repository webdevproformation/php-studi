<?php 
// Que des fonctions communiquent avec une base de données

// plusieurs fonctions => traitements 
// récupérer des informations dans un base de données
function getUsers(){
    return [
        [
            "id" => 1,
            "nom" => "Pierre",
            "isAdmin" => true
        ],
        [
            "id" => 12,
            "nom" => "Béatrice",
            "isAdmin" => true
        ],
    ];
}
