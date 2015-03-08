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
<div class="wrapper">
	<div class="content ">
		<div id="login-image"></div>
		<div id="login-text"><?=PRESENT_YOUR_CARD?></div>

		<form action="dologin.php" class="center" method="post">
		<input type="text" name="id">
		<input type="submit"> 
		</form>
	</div>
</div>




<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>