
<?php 
//this file displays the posts from the database 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$counter=0;
$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql 
	 $stmt = $conn->prepare("SELECT post FROM Topic_content WHERE topic_id = :topic_id ");   // select name from table where email=email and pass=pass
	$stmt->bindParam(':topic_id', $_SESSION["topic"]);

   $stmt->execute();
   
	
	
	
	
	
	
	  $result = $stmt->fetchall(); 
	   
	   
	   
	   
	   $asdf;
    if ($result){
		
		
		
		
		$i=0;
      
        foreach ($result as $rows) 
         {
           
         if ($rows['post']=='newday'){
			 $counter=$counter+1;
			 echo "<h5 class='w3-container ' style='text-align:center; color:white;'><hr> &nbsp; Day ".$counter."<hr></h5>";
			 
			 continue;
		 }
		 
		 
		   echo " <div class='w3-card-4 w3-margin'>

			<header class='w3-container '>
			<h1 class='ColText'> </h1>
			</header>

			<div class='w3-container w3-white'>
				<p>".$rows["post"]."</p>
				</div>



</div>";
         }
    
		
		
		
		
		
	  }  elseif(!$result) {
		  
		  echo "
		  <div class='w3-card-4'>

			<header class='w3-container '>
			<h1 class='ColText'> </h1>
			</header>

			<div class='w3-container w3-white'>
				<p>No content posted</p>
				</div>



</div>
		  ";
		  }
	
	 
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;

?>