<?php

$servername = "database" ;
	$username = "root";
	$password = "root";
	$dbname="db";
// DB Connection	
	// $servername = getenv("MYSQL_HOST") ;
	// $username = getenv("MYSQL_ROOT_USER");
	// $password = getenv("MYSQL_ROOT_PASSWORD");
	// $dbname=getenv("MYSQL_DATABASE");
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}
?>
