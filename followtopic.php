
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
$temp=$_GET['classID'];
$classID=$temp;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("INSERT INTO Following (topic_id, owner_id)
						VALUES (:classID, :owner_id)");
						
						$stmt->bindParam(':classID', $classID);
						$stmt->bindParam(':owner_id', $_SESSION["email"]);
						
	
	 
     
	 $stmt->execute();

     header('Refresh: 0; URL = followingpage.php');
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;
?>