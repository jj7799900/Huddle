
<?php

if (session_status() == PHP_SESSION_NONE) {
session_start();}
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
		 <?php
		 echo "
		  <li class='dropdown'>
	    <a href='homepage.php' style='color:white;' class='w3-button w3-padding-large w3-hide-small'>Welcome to The Huddle ".$_SESSION['firstname']."</a>
		<div class='dropdown-content'>
            <a href='#'>My Content</a>
			<a href='profile.php'>My Profile</a>
			<a href='signout.php'>Sign-out</a>
	    </div>
	  </li>";
		 
	?><a href="leadingpage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><span class="ColText">Leading</span></a>
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
	<div class="w3-content " style="max-width:2000px;margin-top:46px">

	<!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <h2 class="w3-wide">LEADING</h2>
      <p class="w3-opacity"><i>Learn with others</i></p>
      <p class="w3-justify">
	  </p>
    </div>
	
	

	<!-- The Tour Section -->
    <div class="ColorNav" id="tour">
      <div class="w3-container w3-content w3-padding-64" style="max-width:1200px">

	  <!-- include php file that produces a few containers of threads... 
			i need a nice looking box that seperates each thread-->
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
    
	<?php
	 
include("leadercontent.php");




?>

<label class="ColText w3-right w3-padding w3-margin" id="lbl" style="font-weight:bold;">Add Topic
<button  class="w3-button w3-circle w3-teal" id="btnaddtopic" onclick="func(0)">+</button>
	  </label>


</div>

	  
	  
	  
	  
	  
	  <div class="container">  
  <form id="contact" action="addtopic.php" method="post" style="display:none;">
   
   
    <fieldset>
      <input placeholder="Enter a topic name" type="text" name="TopicNm" tabindex="2" required>
    </fieldset>
   <fieldset class="selecter">
     <select name="catagory" tabindex="3" required>
  <option value="events">Events</option>
  <option value="purpose">Purpose</option>
  <option value="faith">Faith</option>
  <option value="music">Music</option>
  <option value="relationships">Relationships</option>
  <option value="life">Life</option>
  <option value="fitness">Fitness</option>
  <option value="education">Education</option>
  <option value="technology">Technology</option>
  <option value="travel">Travel</option>
  <option value="business">Business</option>
  <option value="sports">Sports</option>
  <option value="parenting">Parenting</option>
  <option value="fashion">Fashion</option>
  <option value="books">Books</option>
  <option value="inspiration">Inspiration</option>
  <option value="other">Other</option>
</select> 
    </fieldset>
    <fieldset>
      <button name="subButton" value="Add Topic" type="submit" id="contact-submit"  data-submit="...Sending">Submit</button>
    </fieldset>
   
 

   
  </form>
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

 

	  <p class="w3-justify"><span class="ColText"> </p>
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
	
  </body>
</html>
	
	
	<script type="text/javascript">
    function func(a) {
     
        if(a==0) {
            document.getElementById("contact").style.display="block";
			  document.getElementById("btnaddtopic").style.display="none";
			  document.getElementById("lbl").style.display="none";
        }
        }
	
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
	
	
	
	
	
	