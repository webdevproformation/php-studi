<?php 

var_dump($_FILES);
// image => stocker dans un dossier 
// move_uploaded_file() php
// $_FILES["presentation"]['size'] 
// $_FILES["presentation"]['type'] 
// $_FILES["presentation"]['name'] 
?>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="presentation">
    <input type="submit">
</form>