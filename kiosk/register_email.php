<?php

/*
File: register_email.php
Description:  user email.
Author: Yini Wang
Version: 0.1
Created: 7.3.2015
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
	value.userproblemothers = getCookie('userproblemothers');
	value.useremail = user_email;
	value.userlanguage = getCookie('language');
	post('register_receive.php', value);
		//location.href='welcome.php';
	
}

</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Enter your email</h1>
		</div>
		<div class="body">
			<p>We will send you login information for internet portal via email.</p>
			<div class="register-wrap register-email">
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<input style="width:100%;" type="email" id="input_email" />
						</td>
					</tr>
					<tr>
						<td colspan="2" height="50">&nbsp;</td>
					</tr>
					<tr>
						<td>
							<button class="btn prev" onclick="javascript:history.go(-1);">Back</button>
						</td>
						<td align="right">
							<button class="btn next" onclick="btn_next_onclick()">Next</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="keyboard"></div>
</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>