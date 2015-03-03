<?php

/*
File: config.php
Description: Main config file of the project. You must include it to all your files using php inlcude() function
Author: Alexander Samodelkin
Version: 0.1
Created: 13.02.2015
*/

	define( 'IP_ROOT', 'http://127.0.0.1/swf/' );
	define( 'IP_INTERFACE', IP_ROOT . 'interface/' );
	define( 'IP_CSS', IP_INTERFACE . 'styles/' );
	define( 'IP_PICTURES', IP_INTERFACE . 'pictures/' );
	define( 'IP_SCRIPTS', IP_INTERFACE . 'scripts/' );
	
	define( 'P_INTERFACE', P_ROOT . 'interface/' );
	define( 'P_LANGUAGE', P_INTERFACE . 'mui/' ); 

	define( 'SQL_HOST', 'localhost' );
	define( 'SQL_DB', 'psicoderu_sfp' );
	define( 'SQL_USER', 'root' );
	define( 'SQL_PASS', '' );

	define( 'DEBUG', '0' );
?>