<?php 

session_start();
?>
<body class="bg-danger">


<?php
include("./composant/head.html");
include("./composant/popUpDelete.php");
include("./Composant_php/delete.php");
include("./composant/popupSucces.php");
include ("./Composant_php/create.php");
include ("./Composant_php/updateUserInfo.php");
include ("./Composant_php/login.php");
include ("./Composant_php/logout.php");
include ("./composant/navbar.php");
?>
<main id="bg_img">  
<?php 

if ($_SESSION["auth"]=="admin"){
    include("./composant/admin.php");
}
if(isset($_SESSION["auth"])){


    // INSERT WELCOME LOGIN PAGE

    if(isset($_GET["setting"])){
        include ("./composant/userSettings.php"); 
    } 
    if(isset($_GET["gallery"])){
        include ("./composant/gallery.php"); 
    }
        if(isset($_GET["api"])){
        include ("./composant/apitrailer.php");  
        header("Location : index.php");
    }
    if(isset($_GET["player"])){
        include ("./composant/playerYou.php");  
    }
    if(isset($_GET["intro"])){
        include ("./composant/carroussel.php");  
    }
    
    if(isset($_GET["search"])){
        include ("./composant/search_list.php");  
        
    }
?>
 <div class="d-flex align-items-center justify-content-center">  
<?php     
}else{

  
    
    if(isset($_GET["intro"])){
        include ("./composant/carroussel.php");  
    }
        elseif(isset($_GET["login"])){
        require_once ("./composant/formulaire_connexion.php");
    }
        elseif(isset($_GET["tarifs"])){
        include ("./composant/tarifs.php");    
    }
        elseif(isset($_GET["signup"])){
        include ("./composant/formulaire_inscription.php");
    }
    else{
        include ("./composant/pre-acceuil.php");  
    }
    
    
    
}



?>
 </div>
</main>
<?php
include ("./composant/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>  
    <script src="./js/script.js"></script>  
</body>
</html>




