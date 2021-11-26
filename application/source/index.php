<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.scss">
    <title>Getflix</title>
</head>
<body class="bg-danger">
<?php

include ("./composant/header.php");
?>
<div class="container">

    <div class=" col d-flex justify-content-center">
      <?php 

if(isset($_GET["api"])){
    include ("./composant/apitrailer.php");  
}
if(isset($_GET["player"])){
    include ("./composant/player.php");  
}
if(isset($_GET["gallery"])){
    include ("./composant/gallery.php");  
}
if(isset($_GET["search"])){
    include ("./composant/search_list.php");  
}
if(isset($_GET["tarifs"])){
    include ("./composant/tarifs.php");
    
}
if(isset($_GET["intro"])){
    include ("./composant/carroussel.php");
    
}
if(isset($_GET["login"])){
    include ("./composant/formulaire_connexion.php");
}
if(isset($_GET["signup"])){
    include ("./composant/formulaire_inscription.php");
}
?>
</div>
</div>
<?php
include ("./composant/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>




