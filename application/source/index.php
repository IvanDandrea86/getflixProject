<?php 
session_start();
?>
<?php
// INCLUDE HEAD FUNCTIONS AND NAVBAR
include("./composant/head.html");
?>
<body class="bg-danger">
<?php
include('./Composant_php/function.php');
include("./Composant_php/delete.php");
include ("./Composant_php/create.php");
include ("./Composant_php/updateUserInfo.php");
include ("./Composant_php/login.php");
include ("./Composant_php/logout.php");
include ("./composant/navbar.php");
?>
<main id="bg_img" >  
<?php 
// CONTROL IF IS SESSION ADMIN
if ($_SESSION["auth"]=="root"){
    include("./composant/admin.php");
}
// COmment added
//ROUTING FOR USER SESSION
if(isset($_SESSION["auth"]) && $_SESSION["auth"] !='root'){
    if(isset($_GET["setting"])){
        include ("./composant/userSettings.php"); 
    } 
    if(isset($_GET["gallery"]) )  {
        include ("./composant/carroussel.php"); 
    }
    if(isset($_GET["player"])){
        include ("./composant/playerYou.php");  
    }
    if(isset($_GET["search"])){
        include ("./composant/search_list.php");     
    }
    if(isset($_GET["genres"])){
        include ("./composant/search_genres.php");     
    }
    if(isset($_GET["user_gallery"])){
        include ("./composant/movieSlider.php");  
    }
    if(isset($_GET["faq"])){
        include ("./composant/FAQ.php"); 
    }
    if(isset($_GET["about"])){
        include ("./composant/propos.php"); 
    }
    else{
        // require_once ("./composant/carroussel.php"); 
    }
}
// ROUTING FOR UNRESIGERED SESSION
elseif (!isset($_SESSION["auth"]) && $_SESSION["auth"] !='root'){
    if(isset($_GET["intro"])){
        require_once ("./composant/pre-acceuil.php");  
    }
    if(isset($_GET["faq"])){
        include ("./composant/FAQ.php"); 
    }
            if(isset($_GET["login"])){
       
        require_once ("./composant/formulaire_connexion.php");
    }
        if(isset($_GET["tarifs"])){
           
        include ("./composant/tarifs.php");    
    }
        if(isset($_GET["signup"])){
        include ("./composant/formulaire_inscription.php");
    }
    if(isset($_GET["about"])){
        include ("./composant/propos.php"); 
    }
    elseif(empty($_GET)){
        require_once ("./composant/pre-acceuil.php");  

    }
}
?>
</main>
<!-- INCLUDE FOOTER AND MODALS -->
<?php
include ("./composant/footer.php");
include("./composant/pass_recovery.php");
include("./composant/popupSucces.php");
include("./composant/popUpDelete.php");
?>
<!-- INCLUDE JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>  
    <script src="./js/script.js"></script>  
    <script src="https://uicdn.toast.com/chart/latest/toastui-chart.min.js"></script>
    <script  src="./js/valid_status.js"></script>
    <script  src="./js/chart.js"></script>
</body>
</html>




