<?php
	// P_ROOT and config
	define( 'P_ROOT', dirname(__FILE__) . '/' );
	include( P_ROOT . 'config.php' );

	$link = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB ) 
		or die( "Error: can't connect to the server " .  mysqli_connect_error() );
		
	///////////////////////////////////////////////////////////////////////////////
	// DROP TABLES
	///////////////////////////////////////////////////////////////////////////////
	
	
	$query = "DROP TABLE `users`;";
	$result = mysqli_query( $link, $query ); //or die ( "Error while processing request.<br>Server returned error: ".mysqli_error() );
	
	
	$query = "DROP TABLE `exercise_plan`;";
	$result = mysqli_query( $link, $query ); //or die ( "Error while processing request.<br>Server returned error: ".mysqli_error() );


	///////////////////////////////////////////////////////////////////////////////
	// CREATE TABLES
	///////////////////////////////////////////////////////////////////////////////
	

	$query = "CREATE TABLE `users` (
				`id` 			INT NOT NULL,
				`first_name` 	VARCHAR( 32 ) NOT NULL,
				`last_name` 	VARCHAR( 32 ) NOT NULL,
				`age` 			INT NOT NULL,	
				`gender` 		INT NOT NULL,			
				INDEX ( `id` )
				) ENGINE = MYISAM ;";
				
	$result = mysqli_query( $link, $query ) or die ( "Error while processing request.<br>Server returned error: ".mysqli_error($link) );
				
	$query = "CREATE TABLE `exercise_plan` (
				`id` 			INT NOT NULL AUTO_INCREMENT,
				`user_id` 		INT NOT NULL,
				`exercise_type` INT NOT NULL,	
				`difficulty` 	INT NOT NULL,	
				`ex1_type` 		INT NOT NULL,	
				`ex1_level` 	INT NOT NULL,					
				`ex2_type` 		INT NOT NULL,	
				`ex2_level` 	INT NOT NULL,
				`ex3_type` 		INT NOT NULL,	
				`ex3_level` 	INT NOT NULL,
				`ex4_type` 		INT NOT NULL,	
				`ex4_level` 	INT NOT NULL,					
				INDEX ( `id` )
				) ENGINE = MYISAM ;";
		
	$result = mysqli_query( $link, $query ) or die ( "Error while processing request.<br>Server returned error: ".mysqli_error($link) );


	///////////////////////////////////////////////////////////////////////////////
	// FILL TABLES
	///////////////////////////////////////////////////////////////////////////////
	
	$query = "INSERT INTO `users` 
	( `id`, `first_name`, `last_name`, `age`, `gender` ) 
	VALUES ( 1, 'Test', 'User', 30, 1 )";
	
	$result = mysqli_query( $link, $query ) or die ( "Error while processing request.<br>Server returned error: ".mysqli_error($link) );
	
	$query = "INSERT INTO `exercise_plan` 
	( `user_id`, `exercise_type`, `difficulty`, `ex1_type`, `ex1_level`,`ex2_type`, `ex2_level`,`ex3_type`, `ex3_level`, `ex4_type`, `ex4_level` ) 
	VALUES ( 1, 1, 5, 1, 10, 2, 10, 3, 10, 4, 10 )";
	
	$result = mysqli_query( $link, $query ) or die ( "Error while processing request.<br>Server returned error: ".mysqli_error($link) );
	
	mysqli_close($link);
	
	echo "Installed";

?>



