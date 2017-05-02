
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
    $sql = "CREATE TABLE Topics (
    topic_id   INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    owner_id   VARCHAR(50) NOT NULL,
    topic_name VARCHAR(30) NOT NULL,
    category   VARCHAR(20) NOT NULL
   
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table topics created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>