
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

	$username = $_POST['username']; 
	$usergender = $_POST['usergender'];
	$userage = $_POST['userage'];
	$userexperience = $_POST['userexperience'];
	$userproblem = $_POST['userproblem'];
	$userproblemothers = $_POST['userproblemothers'];
	$useremail = $_POST['useremail'];
	$userlanguage = $_POST['userlanguage'];

	$query = 'insert into "user" (,'.$username.',,'.$useremail.','.$usergender.','.$userage.',,'.$userlanguage.','.$userexperience.','.$userproblem.','.$userproblemothers.',),';	

	//INSERT INTO `user` (`uid`, `name`, `pass`, `email`, `gender`, `age`, `gravatar`, `language`, `experience`, `status`, `scores`) VALUES

	echo "<script type='text/javascript'> window.location.href='welcome.php' </script>";  


?>