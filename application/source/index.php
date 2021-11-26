<?php 

session_start();
?>


<?php
require_once("./composant/head.html");
include ("./Composant_php/create.php");
include ("./Composant_php/login.php");
include ("./Composant_php/logout.php");
include ("./composant/navbar.php");
?>
<main id="contain">    
<?php 


if(isset($_SESSION["auth"])){

    if(isset($_GET["gallery"])){
  
        include ("./composant/gallery.php"); 
    }
        if(isset($_GET["api"])){
        include ("./composant/apitrailer.php");  
        header("Location : index.php");
    }
    if(isset($_GET["player"])){
        include ("./composant/player.php");  
    }
    if(isset($_GET["intro"])){
        include ("./composant/carroussel.php");  
    }
    
    if(isset($_GET["search"])){
        include ("./composant/search_list.php");  
        header("Location : index.php");
    } 
}else{
    if(isset($_GET["login"])){
        require_once ("./composant/formulaire_connexion.php");
    }
    if(isset($_GET["tarifs"])){
        include ("./composant/tarifs.php");    
    }
    if(isset($_GET["signup"])){
        include ("./composant/formulaire_inscription.php");
    }
    
    
    
}



?>
</main>
<?php
include ("./composant/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>




