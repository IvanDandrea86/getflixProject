<?php
include "config.php";
$username_err=" ";
$email_err=" ";
$password_err=" ";
$confirm_password_err=" ";
$error=array();
$uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
if (isset($_POST["signin_submit"])){
  //Control Error state Username
if(empty(trim($_POST["Username"]))){ //CONTROL IF EMPTY INPUT
      $username_err = "Please enter a username.";
    array_push($error,$username_err);

  } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["Username"]))){ //CONTROL IF MATCH WITH REGEX
    $username_err = "Username can only contain letters, numbers, and underscores.";
    array_push($error,$username_err);
  } 
  elseif(strlen(trim($_POST["Username"]))<6){  //CONTROL ON CHARACTER LENGHT
    $username_err = "Username  must be at least 6 character";
    array_push($error,$username_err);
  }
  else{
    // CONTROL IF ALREDY EXIST ON DATABASE
      $sql= "SELECT * FROM Users WHERE Username='".$_POST["Username"]."'";
      $result =$conn-> query($sql); 
    if($result->num_rows>0){
      $username_err="Username alredy exist";
      array_push($error,$username_err);
    }
  
  }
    }
// Control error State Password
if(empty(trim($_POST["Password"]))){ //CONTROL IF EMPTY INPUT
    $password_err = "Please enter a password."; 
    array_push($error,$password_err);    
  } elseif(strlen(trim($_POST["Password"])) < 6){ //CONTROL ON CHARACTER LENGHT
    $password_err = "Password must have atleast 6 characters.";
    array_push($error,$password_err);
  }
    elseif (!$uppercase || !$lowercase || !$number) {
      $password_err="Password must have at least 1 uppercase and 1 number";
      array_push($error,$password_err);
    }
  
// Control Error state Password confirmation
if(empty(trim($_POST["confirm_Password"]))){ //CONTROL IF EMPTY INPUT
    $confirm_password_err = "Please confirm password.";
    array_push($error,$confirm_password_err);    
    } else{
    $confirm_password = trim($_POST["confirm_Password"]);
    if(empty($password_err) || ($_POST["Password"] != $confirm_password)){ //CONTROL ON CONFIRMATION PASSWORD
        $confirm_password_err = "Password did not match.";
        array_push($error,$confirm_password_err);
      }
}
// Control Error state
if(empty($_POST["Email"])) { //CONTROL IF EMPTY INPUT
    $email_err="Plese enter email";
    array_push($error,$email_err);
  }
  else{
    $sql= "SELECT * FROM Users WHERE Email='".$_POST["Email"]."'"; //CONTROL IF ALREDY EXIST INTO DATABSE
    $result =$conn-> query($sql);
    if($result->num_rows>0){
      $email_err="Email alredy exist";
      array_push($error,$email_err);
    }
  }
  
// CHECK ERROR COUNTER
 if(count($error)>0){ //COUNT IF THERE ARE ERRORS

  }else{
    $username= $_POST["Username"];
    $email= $_POST["Email"];
    $password= $_POST["Password"];
    $firstname=validString( $_POST["FirstName"]);
    $lastname= validString( $_POST["LastName"]);
    $date=date("Y-n-d H:i:s");
    // IF NO ERRO INSERT INTO DATABE WITH SQL QUERY
    $sql="INSERT INTO Users VALUES ( UUID_SHORT(),'$username','$email','$password','$lastname','$firstname',NULL,NULL,'$date')";
    $result =$conn->query($sql);
    if($result== TRUE){
      $mode="New user added";
      
      ?>
      <script>
        // OPEN MODAL WITH JQUERY
      $(window).ready(function(){
        <?php $mode="New user added"; ?>
      $('#popUpSucces').modal('show'); 
      })
      </script>
    <?php
    unset($_GET["signup"]);
    }
    else{
      echo "Error:". $sql."<br>" .$conn->error;
    }
    $conn->close();
}
?>

