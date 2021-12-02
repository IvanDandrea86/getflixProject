<?php

include "config.php";

$username_err="";
$confirm_password_err="";
$password_err="";
$email_err="";
$error=array();
if(isset($_POST["create"]) ) {

  //Control Input
    //validate Username
    if(empty(trim($_POST["Username"]))){
      $username_err = "Please enter a username.";
      array_push($error,$username_err);
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["Username"]))){
      $username_err = "Username can only contain letters, numbers, and underscores.";
      array_push($error,$username_err);
    } 
    else{
      $sql= "SELECT * FROM Users WHERE Username='".$_POST["Username"]."'";
    $result =$conn-> query($sql);
    if($result->num_rows>0){
      $username_err="Username alredy exist";
      array_push($error,$username_err);
    }
    }
    // Validate password
      if(empty(trim($_POST["Password"]))){
        $password_err = "Please enter a password."; 
        array_push($error,$password_err);    
      } elseif(strlen(trim($_POST["Password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
        array_push($error,$password_err);
      }
  // Validate confirm password
    if(empty(trim($_POST["confirm_Password"]))){
        $confirm_password_err = "Please confirm password.";
        array_push($error,$confirm_password_err);    
    } else{
        $confirm_password = trim($_POST["confirm_Password"]);
        if(empty($password_err) && ($_POST["Password"] !== $confirm_password)){
            $confirm_password_err = "Password did not match.";
            array_push($error,$confirm_password_err);
          }
    }
  // Validate email
  if(empty($_POST["Email"])) {
    $email_err="Plese enter email";
    array_push($error,$email_err);
  }
  else{
    $sql= "SELECT * FROM Users WHERE Email='".$_POST["Email"]."'";
    $result =$conn-> query($sql);
    if($result->num_rows>0){
      $email_err="Email alredy exist";
      array_push($error,$email_err);
    }
}
    
// check if are errors
if(count($error)>0){
      ?>
      <script>
          $(window).ready(function(){
          $('#signup').modal('show'); 
          })
          </script>
<?php
    }else{
      $username= $_POST["Username"];
      $email= $_POST["Email"];
      $password= $_POST["Password"];
      $firstname= $_POST["FirstName"];
      $lastname= $_POST["LastName"];
      $sql="INSERT INTO Users VALUES ( UUID(),'$username','$email','$password','$lastname','$firstname')";
      $result =$conn->query($sql);
      if($result== TRUE){
        ?>
          <script>
          $(window).ready(function(){
          $('#popUpSucces').modal('show'); 
          })
          </script>
        <?php
        $mode="New user added";
        
        //  echo"New user added succesfully";
      }
      else{
        echo "Error:". $sql."<br>" .$conn->error;
      }
      $conn->close();
  }
}
include 'newUserModal.php';
?>
  