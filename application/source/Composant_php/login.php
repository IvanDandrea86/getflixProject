<?php 

include ('config.php');
$username_login_err="";
$password_login_err="";
$login_error=array();

if (isset($_POST["login"]) || isset($_POST["Password"])){

    //controle username
    if (empty(trim($_POST["Username"]))){
        $username_login_err = "Please enter a Username!";
        array_push($login_error, $username_login_err);
    }elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim(($_POST["Username"])))){
        $username_login_err = "username can only contain letters, numbers and underscore!";
        array_push($login_error, $username_login_err);
    }else{
        $sql= "SELECT * FROM Users WHERE Username='". $_POST["Username"]."'";
        $result = $conn-> query($sql);
        if($result->num_rows===0){
            $username_login_err="This username not exist";
            array_push($login_error,$username_login_err);
        }
    }
    //Controle Password
    if(empty(trim($_POST["Password"]))){
        $password_login_err = "Please enter a password!";
        array_push($login_error,$password_login_err);
    }elseif(strlen(trim($_POST["Password"])) < 6){
        $password_login_err = "Password must have atleast 6 characters!";
        array_push($login_error, $password_login_err);
    }
    // Controll On user password
        if(count($login_error)==0){
            $sql = "SELECT * FROM Users WHERE Username= '".$_POST["Username"]."'";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
                if(  ($_POST["Password"] == $row["User_Password"]) || password_verify($_POST["Password"], $row["User_Password"]))  {   
                    $username=$row["Username"];
                    $id=$row["Id"];
                    $mode=$username." logged in";
                    ?>
                    <script>
                    $(window).ready(function(){
                    $('#popUpSucces').modal('show'); 
                    })
                    </script>
                    <?php
                    $_SESSION['auth']=$username;
                    $_SESSION['id']=$id;    
            }
            else{
                $password_login_err="Wrong password!";
                array_push($login_error, $username_login_err);
            }
                
        }            
}
        
    
    
      
    
?>
        



    
