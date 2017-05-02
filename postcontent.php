
<?php
//start php session for current user variables
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	




//variables to connect to database, change if new database is created
//todo: connect to database once in one config file rather than each php file

$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
$post=$_POST["Text1"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql 
	 $stmt = $conn->prepare("INSERT INTO Topic_content (topic_id, post)
								VALUES (:topic_id, :post)");   
	 $stmt->bindParam(':topic_id', $_SESSION["topic"]);
	 $stmt->bindParam(':post', $post);
//submit content to database
   $stmt->execute();
  
	//refresh page to see new post
	header('Refresh: 0; URL = pulledcontent.php?topic='.$_SESSION["topic"]);
	  
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;
 ?>

	
<?php 


}










