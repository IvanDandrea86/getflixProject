<?php
include "config.php";
 
 if(isset($_POST['update'])) {
    $user_id=$_SESSION["id"];
    $username= $_POST["Username_setting"];
    $email= $_POST["Email_setting"];
    $firstname= $_POST["FirstName_setting"];
    $lastname= $_POST["LastName_setting"];
    $bio=$_POST["Bio_setting"];
    $location=$_POST["Location_setting"];

    $sql=" UPDATE Users SET Username= '$username',Email='$email',User_Password='$password',LastName='$lastname',FirstName='$firstname',Bio='$bio',User_location='$location' WHERE Id= '$user_id'";

    $result =$conn->query($sql);

    if ($result ==TRUE){
        echo "Record updatet succesfully"; 
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
