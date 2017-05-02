<?php 
//use aws\Aws\S3\Exception\S3Exception;
use Aws\S3\Exception\S3Exception;
require 'start.php';
	
	$filename = $_FILES['file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

	
	$file= $_FILES['file'];
	$name=$file['name'];
	
	$tmp_name =$file['tmp_name'];
	
	
	$key =md5(uniqid());
	$tmp_file_name="{$key}.{$ext}";
	$tmp_file_path="{$tmp_file_name}";
	
	
	move_uploaded_file($tmp_name, $tmp_file_path);
	
	

?>