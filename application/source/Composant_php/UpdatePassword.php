<?php

// UPDATE PASSWORD !!! NOT YER FINISHED
include "config.php";
 
 if(isset($_POST['update'])) {
    
    $password= $_POST["New_Password"];
    $sql=" UPDATE Users SET User_Password='$password' WHERE Id= '$user_id'";
    $result =$conn->query($sql);

    if ($result ==TRUE){
        echo "Record updatet succesfully"; 
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
