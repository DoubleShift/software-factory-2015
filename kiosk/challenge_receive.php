

<?php
/*
File: challenge_receive.php
Description:  receive challenge apply.
Author: Chen Xin
Version: 0.2
Created: 20.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	$uid = $_POST['uid']; 
	$cid = $_POST['cid']; 


	$query = "insert into `challenge` ( `id`,`uid`, `cid`, `total`) VALUES(null,'$uid','$cid',100)";	
		
	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	//echo $query;
	$result = mysqli_query( $db, $query );

	if($result){ 
		echo "<script type='text/javascript'> window.location.href='challenge.php?id=$uid' </script>";  
	}else{//what if failed?
		echo "<script>alert('Failed!');  window.location.href='challenge_add.php';</script>";
	}


?>