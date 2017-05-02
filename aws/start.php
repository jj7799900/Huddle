<?php 


require 'C:\wamp64\www\aws\aws-autoloader.php';
use Aws\Sns\SnsClient;
$config = require('config.php');

$client = SnsClient::factory([

 'region' =>$config ['s3']['region'],
   
  
'version' => $config['s3']['version'], 
	
	'key' => $config['s3']['key'],
	'secret' => $config['s3']['secret'],
	

]);


?>