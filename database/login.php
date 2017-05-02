<?php
// Start the session
session_start($_GET["Username"]);

// Set session variables
$_SESSION["email"] = $_GET["Username"];
$_SESSION["password"] = $_GET["password"];
$_SESSION["first"] = null;
$_SESSION["last"] = null;




$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("SELECT firstname, lastname  FROM UserAccounts WHERE email = :email AND password = :password");
						
						$stmt->bindParam(':email', $_SESSION["email"]);
						$stmt->bindParam(':password', $_SESSION["password"]);
	
	 
   
	 
//$EMAIL=   $_GET["Username"];  
//$PASS= $_GET["password"];  
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
          
		$dbfirst=$asdf[0];
		$dblast= $asdf[1];
		$_SESSION["first"] = $dbfirst;
		$_SESSION["last"] = $dblast;

		
		
		
		echo "<h3>Welcome to The Huddle, ".$_SESSION["first"]." ".$_SESSION["last"];	
		
		include();
	  }  elseif(!$result) {
		  session_unset($_SESSION["email"]); 

// destroy the session 
session_destroy(); 
		 echo "<h1>Invalid Login: Please Try Again</h1>";
  header('Refresh: 2; URL = signin.html');
 
exit;
}
	
	  
	  
	  
		
		
	   
	
	 
   
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }
session_unset($_SESSION["email"]); 

// destroy the session 
session_destroy(); 
$conn = null;
?>