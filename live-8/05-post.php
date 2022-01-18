<?php 

var_dump($_POST); // []
if(!empty($_POST["prix"] && !empty($_POST["description"] && !empty($_POST["commentaire"])))){
    // requete en base de données ajouter les informations dans une table
    // email => ok merci pour l'info ....
    echo "merci pour votre message<br>";  
}else {
    // attention veuillez remplir tous les champs ....
}
// formulaire en html 
// champ d'information ET ces champs doivent OBLIGATOIREMENT avoir un attribut name=""
// attribut dans la balise form attribut method="post" method="POST"
?>

<form action="" method="post">
    <input type="number" name="prix" placeholder="saisir un prix">
    <input type="text" name="description" placeholder="saisir une description">
    <br>
    <textarea name="commentaire" cols="30" rows="10" placeholder="saisir un commentaire"></textarea>
    <input type="submit"><!-- bouton valider votre formulaire -->
</form>