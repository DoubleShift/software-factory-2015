<?php

/*
File: error.php
Description: Error page.
Author: Deng Canrong
Version: 0.2
changed: 07.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>

<div id="welcome-picture"></div>

<div id = "error-tip">
	<div id="error-image"></div>
	<div id="error-text"><?=Ooops! Card can not be found?></div>
	<hr align=right width=430 color=#000000 SIZE=3 noShade> 
	<div id="welcome-text"><a href="welcome.php" ><?=ERROR_TIPS?></a></div>

</div>
	


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>