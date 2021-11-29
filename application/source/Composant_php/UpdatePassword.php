<?php
include "config.php";
 
 if(isset($_POST['update'])) {
    $user_id=$_POST["PersonID"];
    $username= $_POST["Username"];
    $email= $_POST["Email"];
    $password= $_POST["Password"];
    $firstname= $_POST["FirstName"];
    $lastname= $_POST["LastName"];

    $sql=" UPDATE Users SET Username= '$username',Email='$email',Password='$password',LastName='$lastname',FirstName='$firstname' WHERE PersonID='$user_id'";

    $result =$conn->query($sql);

    if ($result ==TRUE){
        echo "Record updatet succesfully"; 
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
