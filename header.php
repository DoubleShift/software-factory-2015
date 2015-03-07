<?php

/*
File: header.php
Description: This file defines the header of the page. Include this file to your pages.
Author: Alexander Samodelkin
Version: 0.1
Created: 13.02.2015
*/

	// Include config file
	@define( 'P_ROOT', dirname(__FILE__) . '/' );
	include( P_ROOT . 'config.php' );

	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
	
	// Setting title
	$title = 'SFP';
	
	//Functions
	function curPage() 
	{
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	
	//Loading language file

	
	if(!isset($_COOKIE['language']))
	{
		setcookie('language',"en");
		$_SESSION['language'] = "en";
	}
	else
	{
		$_SESSION['language'] = $_COOKIE['language'];
	}
	
	if(isset($_GET['lang']))
	{
		setcookie('language',$_GET['lang']);
		$_SESSION['language'] = $_GET['lang'];
	}
	
	include( P_LANGUAGE . $_SESSION['language'] . '.php');
	
	include( 'kiosk/alex_exercise.php' );

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?subset=cyrillic,latin&family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	
	<title><?php echo $title; ?></title>
	
	<!-- Add links to stylesheets. Place your css here -->
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>main.css">
	
	<!-- Scripts -->
