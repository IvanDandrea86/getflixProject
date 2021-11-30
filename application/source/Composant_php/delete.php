
<?php
    include "config.php";
    if(isset($_GET["delete"])){
        // QUERY SQL TO DELETE USER
        $sqld = "DELETE FROM Users WHERE Username='".$_SESSION["auth"]."'";
        $result=$conn->query($sqld);  
        if($result==TRUE){
            $mode="User deleted";
            ?>
            <script>
            $(window).ready(function(){
            $('#popUpSucces').modal('show'); 
            })
         </script>
<?php
// THEN DISCONNECT
$conn->close();
if(isset($_SESSION["auth"])){
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
session_destroy();
}
}
    else {
         echo "Error: " .$sql."<br>".$conn->error;
        }
    }
?>