
<?php
$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE Topic_content (
	num 	INT AUTO_INCREMENT PRIMARY KEY ,
    topic_id VARCHAR(30) NOT NULL,
    post     VARCHAR(20000) NOT NULL
   
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table topic_content created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>