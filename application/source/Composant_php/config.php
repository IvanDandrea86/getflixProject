
<?php
//données de connexion 
/*
$serverName = "database:3306";
$userName = "root";
$pass = "root";
$dbName = "getflix";

// création de la connexion 

try{
    $con = new PDO("mysql:host=$serverName; dbname=$dbName", $userName, $pass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion Reussie!";
}
catch (PDOException $e){
    echo "Erreur de connexion!" . $e->getMessage();
}
*/




//données de connexion 

    // $servername = getenv("MYSQL_HOST") ; -->
// 	$username = getenv("MYSQL_ROOT_USER");
// 	$password = getenv("MYSQL_ROOT_PASSWORD");
	// $dbname=getenv("MYSQL_DATABASE");
// 
// création de la connexion 

// try{
//     $con = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connexion Reussie!";
// }
// catch (PDOException $e){
//     echo "Erreur de connexion!" . $e->getMessage();
// }


// DB Connection	
	$servername = getenv("MYSQL_HOST") ;
	$username = getenv("MYSQL_ROOT_USER");
	$password = getenv("MYSQL_ROOT_PASSWORD");
	$dbname=getenv("MYSQL_DATABASE");
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}
?>