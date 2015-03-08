<?php
/*
File: profile_receive.php
Description:  edit profile.
Author: Chen Xin
Version: 0.1
Created: 08.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	$userid = $_POST['id'];
	$username = $_POST['name']; 
	$useremail = $_POST['email'];

	$query = "UPDATE user SET name = '$username', email = '$useremail' WHERE uid = '$userid'";

	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	$result = mysqli_query( $db, $query );
	
	if($result){ //if failed go back to edit page 
		echo "<script type='text/javascript'> window.location.href='profile.php?id=$userid' </script>";  
	}else{
		echo "<script type='text/javascript'> window.location.href='profile_edit.php?id=$userid' </script>";  
	}


?>