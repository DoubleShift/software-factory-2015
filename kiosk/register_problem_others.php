<?php

/*
File: register_problem_others.php
Description:  other health problem.
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

	var user_problem_others = $('#register_other_problem').val();
	$.cookie('userproblemothers', user_problem_others);


	window.location ='register_email.php';

}

</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>AND any other issues that we should know?</h1>
		</div>
		<div class="body">
			<div class="register-wrap register-problem-others">
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<textarea style="width:100%;" id="register_other_problem"></textarea>
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