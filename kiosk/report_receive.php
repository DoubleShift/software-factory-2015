
<?php
/*
File: report_receive.php
Description:  receive problems.
Author: Chen Xin
Version: 0.2
Created: 09.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	$id = $_POST['id']; 
	$type = $_POST['equipment']; 
	$problem = $_POST['problem'];

	$query = "insert into `problem` (`uid`, `type`, `problem`) VALUES($id,'$type','$problem')";	
		
	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	//echo $query;
	$result = mysqli_query( $db, $query );

	if($result){ 
		echo "<script type='text/javascript'> window.location.href='report_success.php' </script>";  
	}else{//what if failed?
		echo "<script>alert('Report Failed!'); </script>";
	}


?>