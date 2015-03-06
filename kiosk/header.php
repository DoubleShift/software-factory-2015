<?php

/*
File: header.php
Description: This file defines the header of the page for kisosk pages.
Author: Alexander Samodelkin
Version: 0.1
Created: 13.02.2015
*/

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	// Include top level header
	define( 'P_ROOT', dirname(dirname(__FILE__)) . '/' );
	include( P_ROOT . 'header.php' );

	// Appand your CSS files after php code
?>
	<!-- Add links to stylesheets. Place your css here -->
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>kiosk-main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>error.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>exercise.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>help.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>rank.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>welcome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>yini.css">
	<link rel="stylesheet" type="text/css" href="<?php echo IP_CSS ?>register.css">

	<!-- avaliable for help.css,delete soon-->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

	<!-- Adjust app for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale = 0.95, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" >

	<!-- Script -->
	<script type="text/javascript" src="<?php echo IP_SCRIPTS ?>util.js"></script>


</head>
<body>
<table id="header" cellpadding="0" cellspacing="0" border="0">
<tr valign="middle">
	<td><a href="welcome.php"><img src="../interface/pictures/logo.png alt="Health Ex" /></a></td>
	<!--<td id="header-text"><span class="green">H</span>ealth<span class="green">E</span>x</td>-->
<td>
	<img class="language<?php if($_SESSION['language']!='fi') echo ' opacity' ?>" src="<?=IP_PICTURES;?>fi.png" onclick="location.href='<?php echo curPage();?>?lang=fi'" />
	<img class="language<?php if($_SESSION['language']!='en') echo ' opacity' ?>" src="<?=IP_PICTURES;?>en.png" onclick="location.href='<?php echo curPage();?>?lang=en'"  />
	<img class="language<?php if($_SESSION['language']!='ru') echo ' opacity' ?>" src="<?=IP_PICTURES;?>ru.png" onclick="location.href='<?php echo curPage();?>?lang=ru'"  />
	<img class="language<?php if($_SESSION['language']!='cn') echo ' opacity' ?>" src="<?=IP_PICTURES;?>cn.png" onclick="location.href='<?php echo curPage();?>?lang=cn'"  />
</td>
<td align="right">
	<div class="menu-item" onclick="location.href='report.php'">
	<img class="menu-image" src="<?=IP_PICTURES?>tool.png">
	<span class="menu-text"><?=REPORT_PROBLEM?></span>
	</div><div class="menu-item" onclick="location.href='help.php'">
	<img class="menu-image" src="<?=IP_PICTURES?>help.png">
	<span class="menu-text"><?=HELP?></span>
	</div>
</td>
</tr></table>
