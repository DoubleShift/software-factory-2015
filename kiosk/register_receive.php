<?php
/*
File: receive.php
Description:  receive user register data.
Author: Chen Xin
Version: 0.1
Created: 03.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	$username = $_POST['username']; 
	$usergender = $_POST['usergender'];
	$userage = $_POST['userage'];
	$userexperience = $_POST['userexperience'];
	$userproblem = $_POST['userproblem'];
	$useremail = $_POST['useremail'];
	$userlanguage = $_POST['userlanguage'];

	$query = 'insert into "user" (,'.$username.',,'.$useremail.','.$usergender.','.$userage.',,'.$userlanguage.','.$userexperience.','.$userproblem.',),';	

	//INSERT INTO `user` (`uid`, `name`, `pass`, `email`, `gender`, `age`, `gravatar`, `language`, `experience`, `status`, `scores`) VALUES

	echo "<script type='text/javascript'> window.location.href='welcome.php' </script>";  


?>