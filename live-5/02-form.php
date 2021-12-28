<?php
   // var_dump($_POST); // super globale de PHP => créée automatiquement par php 
    // $_POST = []
    // $_POST = [ "nom" => "Alain" , "age" => "12" ]
    // si le tableau $_POST n'est pas vide

    if(!empty($_POST)){
        if(empty($_POST["nom"]) || empty($_POST["age"])){
            echo "veuillez remplir les deux champs !!";
        }else {
            echo "merci pour votre message !"; 
        }
    }
?>


<form method="POST">
    <input type="text" name="nom" placeholder="votre nom">
    <input type="text" name="age" placeholder="votre age">
    <input type="submit">
</form>