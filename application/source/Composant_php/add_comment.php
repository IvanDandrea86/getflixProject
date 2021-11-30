<?php 
include ("./config.php");

if(isset($_POST['submit_comment']) & !empty($_POST['submit_comment'])){
	$subject = mysqli_real_escape_string($connection, $_POST['subject']);
    $date=date("Y-n-d H:i:s");
	$isql = "INSERT INTO comments VALUES (UUID(),'$subject','$date', NULL, '$movieref', '$user_id')";
	$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
	if($ires){
		$smsg = "Your Comment Submitted Success";
	}else{
		$fmsg = "Failed to Submit Your Comment";
	}
 
}
?>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>