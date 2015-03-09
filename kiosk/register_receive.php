
<?php
/*
File: register_receive.php
Description:  receive user register data.
Author: Yini Wang
Version: 0.2
Created: 07.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	$userid = $_POST['userid']; 
	$username = $_POST['username']; 
	$usergender = $_POST['usergender'];
	$userage = $_POST['userage'];
	$userexperience = $_POST['userexperience'];
	$userproblem = $_POST['userproblem'];
	$userproblemothers = $_POST['userproblemothers'];
	$useremail = $_POST['useremail'];
	$userlanguage = $_POST['userlanguage'];

	$query = "insert into `user` (`uid`, `name`, `pass`, `email`, `gender`, `age`, `gravatar`, `language`, `experience`, `status`, `scores`) VALUES($userid,'$username','','$useremail','$usergender','$userage','','$userlanguage','$userexperience','$userproblem','')";	

	
	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	echo $query;
	$result = mysqli_query( $db, $query );
	//var_dump($result);
	if($result){ 
		echo "<script type='text/javascript'> window.location.href='welcome.php' </script>";  
	}else{//what if failed?
		echo "<script>alert('Register Failed!'); </script>";
	}


?>