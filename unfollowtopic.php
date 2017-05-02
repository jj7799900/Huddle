
<?php
// start php session for current user variables
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//variables to connect to database, change if new database is created
//todo: remove hard code and connect to database once in one config file rather than each php file
$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
$temp=$_GET['classID'];
$classID=$temp;

try {
	//make connection to mysql database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("DELETE from Following WHERE topic_id = :classID AND  owner_id=:owner_id");
						
						$stmt->bindParam(':classID', $classID);
						$stmt->bindParam(':owner_id', $_SESSION["email"]);
						
	
	 
     //execute sql statement
	 $stmt->execute();

     header('Refresh: 0; URL = followingpage.php');
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;
?>