
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();}

$servername = "huddledatabase.cjr09iq71xkk.us-east-1.rds.amazonaws.com:3306";
$username = "Aministrator";
$password = "Engineering77";
$dbname = "HuddleDataBase";
$topic = $_GET['topic'];
$_SESSION["topic"]=$topic;


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql 
	 $stmt = $conn->prepare("SELECT topic_id, topic_name, category FROM Topics WHERE topic_id = :topic_id");   
	 $stmt->bindParam(':topic_id', $topic);

   $stmt->execute();
   
	
	
	
	
	
	
	  $result = $stmt->fetchall(); 
	   
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
    
     
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="HuddleCSS.css" type="text/css" rel="stylesheet" /> 
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
			<a href="profile.php">My Profile</a>
			<a href="signout.php">Sign-out</a>
	    </div>
	  </li>
		

		 <a href="leadingpage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><span class="ColText">Leading</span></a>
		<a href="followingpage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><span class="ColText">Following</span></a>
		
	 </div>
	</div>

	<!-- Navbar on small screens-->
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
      
	
	
	
	

<?php 





	   
	   
	  
    if ($result){
		
      
        
             foreach ($result as $rows){
			
			  
echo"	  <h2 class='w3-wide'>THE ".$rows['topic_name']." HUDDLE</h2>";
?>      
	  
	 <?php echo" <p class='w3-opacity'><i>Tell your friends to follow ".$rows["topic_id"]." from the ".$rows['category']." category</i></p>
	 <i class='w3-opacity' style='float:top;' >Learn with others</i>";?>
      
	  
	  <p class="w3-justify">
	 
	  </p>
    </div>
	
	<!-- The Tour Section notify button-->
    <div class="ColorNav" id="tour">
      <div class="w3-container w3-content w3-padding-64" style="max-width:1200px">
	  
	  
	  
   
	  
	  
	  <!-- include php file that produces a few containers of threads... 
			i need a nice looking box that seperates each thread  include("followercontent.php");-->
      

	  <p class="w3-justify"><span class="ColText">
			
			
			<?php
			
			
			
			
			
			
			
			
			
		}
    
		
		include("displaycontent.php");
		
		
		
	  }  elseif(!$result) {
		  
		  echo "Error Has occuried in pulledcontent.php";
		  }
	
	 }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;
 ?>
 </p>
 	  </div>
        </div>
		</br></br>



	  
	</body>
</html>



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
		<script type="text/javascript">
		var tog=0;
function func(a) {
  if (a==tog){
	  document.getElementById("contact").style.display="block";
	  tog=1;
  }else{document.getElementById("contact").style.display="none";
  tog=0;}

         
			  
        
}

</script>
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
	

	




