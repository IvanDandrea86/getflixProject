<?php 
include "config.php";

if(isset($_POST['submit_comment']) & !empty($_POST['subject'])){
	$subject =  $_POST['subject'];
    $user_id=$_SESSION["id"];
	$date=date("Y-n-d H:i:s");
	$movieref=intval($film_det->id);
	$rating=intval($film_det->vote_average);
	$sql = "INSERT INTO comments VALUES (UUID(),'$subject','$date', '$rating', '$movieref', '$user_id')";
	$result =$conn->query($sql);
    if($result== TRUE){
      $mode="New comment added "; 
      ?>
      <script>
        // OPEN MODAL WITH JQUERY
      $(window).ready(function(){
      
      $('#popUpSucces').modal('show'); 
      })
      </script>
    <?php
    }
    else{
      echo "Error:". $sql."<br>" .$conn->error;
    }
    $conn->close();
}
?>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>