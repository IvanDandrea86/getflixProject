<?php
// UPDATE USER INFO ON SETTINGS SECTION
include "config.php";
 if(isset($_POST['update'])) {
    $user_id=$_SESSION["id"];
    $username= $_POST["Username_setting"];
    $email= $_POST["Email_setting"];
    $firstname= validString($_POST["FristName_setting"]);
    $lastname= validString($_POST["LastName_setting"]);
    $bio=validString($_POST["Bio_setting"]);
    $location=$_POST["Location_setting"];
    $sql=" UPDATE Users SET Username='$username',Email='$email',LastName='$lastname',FirstName='$firstname',Bio='$bio',User_location='$location' WHERE Id= '$user_id'";
    $result =$conn->query($sql);
    if ($result ==TRUE){
        $mode=$username." info updated";
        ?>
        <script>
        $(window).ready(function(){
        $('#popUpSucces').modal('show'); 
        })
        </script>        
      <?php
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
