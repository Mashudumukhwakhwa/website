<?php 
	$dbhost		="localhost";
	$dbuser		="root";
	$dbpassword	="";
	$dbname		="vw_garage";
	

	$connection=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	if(!$connection){
		die("error occured".mysqli_error($connection));
	}
		echo"connected";
?>