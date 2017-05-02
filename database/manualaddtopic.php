
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("INSERT INTO Topics (topic_id, owner_id, topic_name, category)
						VALUES ('test_topic_id1', :owner_id,'Test Topic Name' , 'Other')");
						
						$stmt->bindParam(':owner_id', $_SESSION["email"]);
						
	
	 
     
	 $stmt->execute();

    echo "successful";
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;
?>