
<?php
// LOG OUT SESSION CONTROL
if(isset($_POST["logout"])){
$mode=$_SESSION['auth']." disconnected ";
?>
 <script>
          $(window).ready(function(){
          $('#popUpSucces').modal('show'); 
          })
          </script> 
          <?php
session_start();
unset($_SESSION['auth']);
$_GET["login"]="";
session_destroy();
}


?>