<?php

/*
File: problem.php
Description:  health problem.
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

	var user_problem=document.getElementById("input_problem").value;
	setCookie("userproblem", user_problem);   
	location.href='register_email.php';
}

</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>AND any other issues that we should know?</h1>
		</div>
		<div class="body">
			<form action="post" class="form register register-general">
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<textarea name="register_other_problem"></textarea>
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
			</form>
		</div>
	</div>

	<div class="keyboard"></div>
</div>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>