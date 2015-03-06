<?php

/*
File: email.php
Description:  user email.
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

	var user_email=document.getElementById("input_email").value;
	setCookie("useremail", user_email);

	var value = {};
	value.username = getCookie('username'); 
	value.usergender = getCookie('usergender');
	value.userage = getCookie('userage');
	value.userexperience = getCookie('userexperience');
	value.userproblem = getCookie('userproblem');
	value.useremail = user_email;
	value.userlanguage = getCookie('language');
	post('register_receive.php', value);
		//location.href='welcome.php';
	
}

</script>

<div id="welcome-picture"></div>

<div class="main-box">
<input type="text" id="input_email">
	<button class="button-back" onclick="javascript:history.go(-1);"><?=BACK?></button>
	<button  class="button-back" onclick="btn_next_onclick()">Next</button>


</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>