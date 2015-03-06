<?php

/*
File: register_name.php
Description: register name
Author: Yini Wang
Version: 0.1
Created: 6.3.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

?>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Enter your name</h1>
		</div>
		<div class="body">
			<p>This will be hte name for your registration that is assigned with your card.</p>
			<form action="post" class="form register register-name">
				<table width="100%">
					<tr>
						<td>
							<input type="text" id="input_name" />
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<button class="btn next" onclick="btn_next_onclick()">Next<span></span></button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div class="keyboard"></div>
</div>

<script type="text/javascript">
	
function btn_next_onclick(){
	var user_name=document.getElementById("input_name").value;
	setCookie("username", user_name);   
	location.href='register_gender.php';
}

</script>



<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>