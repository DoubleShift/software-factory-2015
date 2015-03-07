<?php

/*
File: login.php
Description: Login page.
Author: Alexander Samodelkin
Version: 0.1
Created: 13.02.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>

<div id="welcome-picture"></div>
<div id="welcome-image"></div>
<div id="welcome-text"><?=PRESENT_YOUR_CARD?></div>

<form action="dologin.php" class="center" method="post">
<input type="text" name="id">
<input type="submit"> 
</form>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>