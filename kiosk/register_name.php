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


?>

<script>

function btn_next_onclick(){
	var user_name=document.getElementById("input_name").value;
	setCookie("username", user_name);   
	location.href='register_gender.php';
}

</script>

<div id="welcome-picture"></div>


	<div class="main-box">
		<h1 class="title">Enter your name</h1>
		<hr align=left width=720 color=#000000 SIZE=3 noShade> 
		<h1 class="main-text">Please input your name:</h1>
		<input id="input_name" type="text">
		<button  class="button-back" onclick="btn_next_onclick()">Next</button>

	</div>

	<button class="button-back" onclick="javascript:history.go(-1);"><?=BACK?></button>



<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>