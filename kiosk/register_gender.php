<?php

/*
File: report.php
Description: report a problem.
Author: Chen Xin
Version: 0.1
Created: 24.02.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<script>

function btn_next_onclick(){
	var user_gender=document.getElementById("input_gender").value;
	setCookie("usergender", user_gender);   

	var user_age=document.getElementById("input_age").value;
	setCookie("userage", user_age);   
	location.href='register_experience.php';
}

</script>
<div id="welcome-picture"></div>

<div class="main-box">


</div>

	<button class="button-back" onclick="javascript:history.go(-1);"><?=BACK?></button>
	<button  class="button-back" onclick="btn_next_onclick()">Next</button>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>