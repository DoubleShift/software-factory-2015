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
/* waiting to write*/
function btn_next_onclick(){

	/*var user_problem=document.getElementById("input_problem").value;
	setCookie("userproblem", user_problem);   
	location.href='yini_register_email.php';*/

	
}

</script>
<div class="wrapper">
	<div class="content register-name">
<div id="welcome-picture"></div>
<div class="wrapper">
	<div class="content register-name">
	<div class="heading">
			<h1>Report a problem</h1>
			
		</div>
	<div class="body">
	 <h2>Select the problematic equipment</h2>
	
	<table >
	<tr>
	<h2>Describe the problem</h2>
	</tr>
	<tr>
	<textarea style="width:100%;" id="register_other_problem"></textarea>
	<tr height=20>
	</tr>
	<tr>
						<td>
							<button class="btn prev" onclick="JavaScript:history.go(-1);">Back</button>
						</td>
						<td align="right">
							<button class="btn next" onclick="btn_next_onclick()">Next</button>
						</td>
					</tr>
	</table>
</div>
</div>
</div>
</div>
<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>
