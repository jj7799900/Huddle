<?php 


require 'C:\wamp64\www\aws\aws-autoloader.php';
use Aws\S3\S3Client;
$config = require('config.php');

$s3 = S3Client::factory([

 'region' =>$config ['s3']['region'],
   
   'profile' => $config['s3']['profile'],
'version' => $config['s3']['version'], 
	
	'key' => $config['s3']['key'],
	'secret' => $config['s3']['secret'],
	

]);


?>