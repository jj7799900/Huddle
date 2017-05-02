
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();}
$search=$_POST['search'];
	?>	
	
	<!DOCTYPE html>
<html>
  <head>
    <title>The Huddle</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <link href="HuddleCSS.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
      html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
    </style>
  </head>
  
  <body>
	
	<!-- Navbar -->
	<div class="w3-top">
	  <div class="w3-bar w3-card-2 ColorNav">
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		 
 <li class="dropdown ">
	    <a href="homepage.php" style="color:white;" class="w3-button w3-padding-large w3-hide-small">Home</a>
		<div class="dropdown-content ">
            <a href="#">My Content</a>
			<a href="profile.html">My Profile</a>
			<a href="signout.php">Sign-out</a>
	    </div>
	  </li>
		

		 <a href="leadingpage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><span class="ColText">Leading</span></a>
		<a href="followingpage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><span class="ColText">Following</span></a>
		
	 </div>
	</div>

	<!-- Navbar on small screens -->
	<div id="navDemo1" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	   <?php
		 echo "
		  <li class='dropdown'>
	    <a href='homepage.php' style='color:white;' class='w3-button w3-padding-large w3-hide-small'>Welcome to The Huddle ".$_SESSION['firstname']."</a>
		
		<a href='followingpage.php'>Following</a>
		<a href='leadingpage.php'>Leading</a>
        <a href='#'>My Content</a>
		<a href='profile.php'>My Profile</a>
		<a href='signout.php'>Sign-out</a>
	  </li>";
		 
	?><a href="leadingpage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><span class="ColText">Leading</span></a>
		<a href="followingpage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><span class="ColText">Following</span></a>
	</div>
	
	<!-- Page content -->
	<div class="w3-content" style="max-width:2000px;margin-top:46px">

	<!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <h2 class="w3-wide">SEARCH RESULTS</h2>
      
	  <?php
	  echo " <p class='w3-opacity'><i>".$search."</i></p>";
?>
	 
      
	  
	  <p class="w3-justify">
	  </p>
    </div>
	
	<!-- The Tour Section -->
    <div class="ColorNav" id="tour">
      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">

	  <!-- include php file that produces a few containers of threads... 
			i need a nice looking box that seperates each thread -->
       
 
	  <?php 





$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
$newsearch="%";
try {
    $strlen = strlen( $search );
for( $i = 0; $i <= $strlen; $i++ ) {
   
if($i%2==0){   $newsearch = $newsearch.substr( $search, $i, 1 )."%";}
else{$newsearch = $newsearch."%";}
    // $char contains the current character, so do your processing here
	
}

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql 
	 $stmt = $conn->prepare("SELECT topic_id, topic_name, category FROM Topics WHERE topic_id LIKE :search OR topic_name like :search OR category LIKE :search OR owner_id LIKE :search");   // select name from table where email=email and pass=pass
	$stmt->bindParam(':search', $newsearch);

   $stmt->execute();
  
  
  
  
  

	
	
	
	  $result = $stmt->fetchall(); 
	   
	   
	   
	   
	   $asdf;
    if ($result){
		$i=0;
       echo " <h2 class='w3-wide w3-center'><span class='ColText'>WE FOUND SOME MATCHES FOR YOU</span></h2>";
        foreach ($result as $rows) 
         {
          
           echo "
		    <a href="."pulledcontentF.php?topic=".$rows['topic_id']."  > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/norway.jpg' alt='Norway'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'>".$rows['topic_name']."<hr style='margin:0px;'></p>
    <p style='margin:0px;'>Unique ID: ".$rows['topic_id']."<hr style='margin:0px;'></p>
  </div><div  class='w3-white'><span style='padding-left:5em;'   ><a href='followtopic.php?classID=".$rows['topic_id']."' style='color:#ff6600;'>follow &#10004</a></span>
</div></div></a>"; }
    
		
		
		
		
		
	  }  elseif(!$result) {
		   echo " <h2 class='w3-wide w3-center'><span class='ColText'>WE DIDN'T FIND ANY RESULTS</span></h2>";
		 echo " <h4 class='w3-wide w3-center'><span class='ColText'>Search again</span></h4>";
		 
		 
		 echo " 	  <div class='container'>  
  <form id='contact' action='follownew.php' method='post'>
   
    <fieldset>
      <input placeholder='SEARCH' type='search' name='search' tabindex='1' required >
    </fieldset>
    
    <fieldset>
      <button name='subButton' value='Search' type='submit' style='margin:10px;' id='contact-submit' data-submit='...Sending'>Submit</button>
    </fieldset>
   
 

   
  </form>
</div> ";
		  }
	
	
	
	
  
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;
?>
	  
	  
	  
	  
	  
	  
	 
	 
	  </div>
      
    </div>
	
 
 
	<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
	  <p class="w3-medium">
	  Connect with us!
	  </p>
	  <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
	  <i class="fa fa-instagram w3-hover-text-purple"></i>
	  <i class="fa fa-snapchat w3-hover-text-yellow"></i>
	  <i class="fa fa-pinterest-p w3-hover-text-red"></i>
	  <i class="fa fa-twitter w3-hover-text-light-blue"></i>
	  <i class="fa fa-linkedin w3-hover-text-indigo"></i>
	</footer>
	<script>
	
	// Used to toggle the menu on small screens when clicking on the menu button
	function myFunction() 
	{
			var x = document.getElementById("navDemo1");
			if (x.className.indexOf("w3-show") == -1) 
			{
				x.className += " w3-show";
			} 
			else 
			{ 
				x.className = x.className.replace(" w3-show", "");
			}
		}


    </script>
	
  </body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		