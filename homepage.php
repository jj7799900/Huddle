
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
	<div class="w3-content" style="max-width:2000px;margin-top:46px">

	<!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <h2 class="w3-wide">THE HUDDLE</h2>
      <p class="w3-opacity"><i>Learn from others</i></p>
      <p class="w3-justify">
	  </p>
    </div>
	
	<!-- The Tour Section -->
    <div class="ColorNav" id="tour">
      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">

	  <!-- include php file that produces a few containers of threads... 
			i need a nice looking box that seperates each thread-->
        <h2 class="w3-wide w3-center"><span class="ColText">FIND A NEW HUDDLE
		
		</span></h2>
		
		
		
		
		 <a href="pullcats.php?cat=books" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/books.jpg' alt='books'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Books<hr style='margin:0px;'></p>
  </div></div></a>

  
  
  

<a href="pullcats.php?cat=business" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/business.jpg' alt='business'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Business<hr style='margin:0px;'></p>
  </div></div></a>

  
  
  


<a href="pullcats.php?cat=education" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/education.jpg' alt='education'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Education<hr style='margin:0px;'></p>
  </div></div></a>

  
  


<a href="pullcats.php?cat=purpose" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/purpose.jpg' alt='purpose'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Purpose<hr style='margin:0px;'></p>
  </div></div></a>


  
  
  

<a href="pullcats.php?cat=faith" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/faith.jpg' alt='faith'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Faith<hr style='margin:0px;'></p>
  </div></div></a>


  
  
  
<a href="pullcats.php?cat=music" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/music.jpg' alt='Music'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Music<hr style='margin:0px;'></p>
  </div></div></a>


  
  
  

<a href="pullcats.php?cat=relationships" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/relationships.jpg' alt='relationships'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Relationships<hr style='margin:0px;'></p>
  </div></div></a>

  
  
  
  

<a href="pullcats.php?cat=life" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/life.jpg' alt='life'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Life<hr style='margin:0px;'></p>
  </div></div></a>

  
  
  
  


<a href="pullcats.php?cat=fitness" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/fitness.jpg' alt='fitness'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Fitness<hr style='margin:0px;'></p>
  </div></div></a>

  
  
  

<a href="pullcats.php?cat=technology" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/technology.jpg' alt='technology'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Technology<hr style='margin:0px;'></p>
  </div></div></a>


  
  
  

<a href="pullcats.php?cat=travel" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/travel.jpg' alt='travel'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Travel<hr style='margin:0px;'></p>
  </div></div></a>

  
  
  

<a href="pullcats.php?cat=sports" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/sports.jpg' alt='sports'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Sports<hr style='margin:0px;'></p>
  </div></div></a>


  
  
  


<a href="pullcats.php?cat=parenting" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/parenting.jpg' alt='parenting'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Parenting<hr style='margin:0px;'></p>
  </div></div></a>


  
  
  
  
<a href="pullcats.php?cat=fashion" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/fashion.jpg' alt='Fashion'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Fashion<hr style='margin:0px;'></p>
  </div></div></a>
  
  
  
  
  
  

<a href="pullcats.php?cat=inspiration" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/inspiration.jpg' alt='inspiration'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Inspiration<hr style='margin:0px;'></p>
  </div></div></a>
  
  
  
  

<a href="pullcats.php?cat=other" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/other.jpg' alt='other'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Other<hr style='margin:0px;'></p>
  </div></div></a>
  
  
  
  

<a href="pullcats.php?cat=events" > <div class='w3-card-4 w3-third w3-shadow w3-animate-zoom ' style='max-width:30%;margin:10px;'>
  <img style='max-width:100%;' src='images/cats/events.jpg' alt='events'>
  <div class='w3-container w3-center w3-white'>
    
    <p style='margin:0px;'><hr style='margin:0px;'></p>
    <p style='margin:0px;'>Events<hr style='margin:0px;'></p>
  </div></div></a>
  
  
  
  
  

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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		