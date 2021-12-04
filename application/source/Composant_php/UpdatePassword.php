<?php


include "config.php";
 $password_err='';
 $old_password_err='';
 $conf_password_err='';
 $array_err=array();
 $pattern = '/^(?=.*[0-9])(?=.*[A-Z])$/';

 if(isset($_POST['changePass'])) 
 {
    $sql = "SELECT * FROM Users WHERE Username= '".$_SESSION["auth"]."'";
    $result=$conn->query($sql);

    $row=$result->fetch_assoc();
    if(password_verify($_POST["old_pass"], $row["User_Password"])){
        if (empty(trim($_POST["new_pass"]))) { //CONTROL IF EMPTY INPUT
            $password_err = "Please enter a password.";
            array_push($array_err, $password_err);
        } elseif (strlen(trim($_POST["new_pass"])) < 6) { //CONTROL ON CHARACTER LENGHT
            $password_err = "Password must have atleast 6 characters.";
            array_push($array_err, $password_err);
        }
        elseif (preg_match($pattern,$_POST["new_pass"])) {
            $password_err="Password must have at least 1 uppercase and 1 number";
            array_push($array_err,$password_err);
        }
        else{
            if ($_POST["new_pass"]!=$_POST["confirm_new_pass"]){
                $conf_password_err="Password are not the same";
                array_push($array_err,$conf_password_err);
            }
            else{
                $user_id=$_SESSION["id"];
                $password= password_hash($_POST["new_pass"], PASSWORD_DEFAULT);
                $sql=" UPDATE Users SET User_Password='$password' WHERE Id= '$user_id'";
                $result =$conn->query($sql);
                if ($result ==TRUE){
                    $mode="Password updated ";
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
        }
    }
    else{
        $old_password_err="Your password is not correct";
                array_push($array_err,$old_password_err);
    }
}
