<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//unset session data
		  session_unset(); 

// destroy the session 
session_destroy(); 
	
//return to index page after sign out
  header('Refresh: 0; URL = index.html');	
exit;

	
	  
	  
	  

?>