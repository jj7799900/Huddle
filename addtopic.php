
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";

$temp=$_POST['TopicNm'];
$TopicName=$temp;
$temp=$_POST['catagory'];
$category=$temp;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("INSERT INTO Topics (owner_id, topic_name, category)
						VALUES ( :owner_id,  :topic_name , :category)");
						
						
						$stmt->bindParam(':owner_id', $_SESSION["email"]);
						$stmt->bindParam(':topic_name', $TopicName);
						$stmt->bindParam(':category', $category);
						
	
	 
     
	 $stmt->execute();

     header('Refresh: 0; URL = leadingpage.php');
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;
?>