
<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//variables to connect to database, change if new database is created
//todo: remove hard code and connect to database once in one config file rather than each php file

$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql 
	 $stmt = $conn->prepare("SELECT topic_id, topic_name, category FROM Topics WHERE owner_id = :owner_id ");   // select name from table where email=email and pass=pass
	$stmt->bindParam(':owner_id', $_SESSION["email"]);

   $stmt->execute();
   
	
	
	
	
	
	
	  $result = $stmt->fetchall(); 
	   
	   
	   
	   
	   $asdf;
    if ($result){
		$i=0;
      echo " <h2 class='w3-wide w3-center'><span class='ColText'>YOUR CURRENT THREADS</span></h2>";
        foreach ($result as $rows) 
         {
  // these are the boxes displayed on the leading page
           echo "
		    <a href="."pulledcontent.php?topic=".$rows['topic_id']."  > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/norway.jpg' alt='Norway'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'>".$rows['topic_name']."<hr style='margin:0px;'></p>
    <p style='margin:0px;'>Unique ID: ".$rows['topic_id']."<hr style='margin:0px;'></p>
  </div><div  class='w3-white'><span style='padding-left:5em;'   ><a href='deletetopic.php?classID=".$rows['topic_id']."' style='color:red;'>remove &#10006</a></span>
</div></div></a>";
		   
		   
		   
		 
         }
    
		
		
		
		
		//display nicely if no results exist
	  }  elseif(!$result) {
		   echo " <h2 class='w3-wide w3-center'><span class='ColText'>NO CURRENT THREADS</span></h2>";
		 echo " <h4 class='w3-wide w3-center'><span class='ColText'>TALK ABOUT SOMETHING</span></h4>";
		  }
	
	
	
	
  
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;

?>