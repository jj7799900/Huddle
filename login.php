<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
session_start();}
// Set session variables
//to connect to database
//change if new database is created
//todo: connect to database once in one config file 
//rather than each php file

$temp=$_POST['Username'];
$_SESSION["email"] = $temp;
$temp=$_POST['password'];
$_SESSION["password"] =$temp;
$_SESSION["first"] = null;
$_SESSION["last"] = null;
$_SESSION["server"] = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$_SESSION["dbacc"] = "Aministrator";
$_SESSION["dbpass"] = "Engineering77";
$_SESSION["dbname"] = "HuddleDataBase";

$servername = $_SESSION["server"];
$dbusername = $_SESSION["dbacc"];
$password = $_SESSION["dbpass"];
$dbname = $_SESSION["dbname"];
try {//todo: verify password case matches, start main session in here
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $password);

  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("SELECT firstname, lastname  FROM UserAccounts WHERE email = :email AND password = :password");
						
						$stmt->bindParam(':email', $_SESSION["email"]);
						$stmt->bindParam(':password', $_SESSION["password"]);
	
	 
     
	 $stmt->execute();

	 
	 
	   $result = $stmt->fetch(PDO::FETCH_ASSOC); 
	   
	   
	   $asdf;
    if ($result){
		$i=0;
      
        foreach ($result as $key => $value ) 
         {
           
            $asdf[$i]=$value;
            $i=$i+1;
         }
          //fills session data with data pulled from database
		$dbfirst=$asdf[0];
		$dblast= $asdf[1];
		$_SESSION["firstname"] = $dbfirst;
		$_SESSION["lastname"] = $dblast;

		
		//to homepage after loging
		//todo check if truely logged in... ie handle back button issues
		header("Location: homepage.php");
		exit;
		
		
	  }  elseif(!$result) {
		  session_unset(); 

// destroy the session 
session_destroy(); 
		 echo "<h1>Invalid Login: Please Try Again</h1>";
  header('Refresh: 2; URL = index.html');
 
exit;
}
	
	  
	  
	  
		
		
	   
	
	 
   
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }


$conn = null;
?>