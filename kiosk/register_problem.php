<?php

/*
File: register_problem.php
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

	/*var user_problem=document.getElementById("input_problem").value;
	setCookie("userproblem", user_problem);   
	location.href='yini_register_problem_others.php';*/

	var user_problem = [];

	$('input[name="register_problem"]:checked').each(function(){
		var problem_name = $(this).val();
		user_problem.push(problem_name)
	});
	
	$.cookie('userproblem', user_problem);

	window.location ='register_problem_others.php';
	
}

</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Provide your health status</h1>
		</div>
		<div class="body">
			<div class="register-wrap register-problem">
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Choose if you have any unconvenience with part of body</label>
						</td>
					</tr>
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<a href="#" class="option-block register-problem">Heart
								<input type="checkbox" name="register_problem" value="heart" />
							</a>
							<a href="#" class="option-block register-problem">Arms
								<input type="checkbox" name="register_problem" value="arms" />
							</a>
							<a href="#" class="option-block register-problem">Legs
								<input type="checkbox" name="register_problem" value="legs" />
							</a>
							<a href="#" class="option-block register-problem">Back
								<input type="checkbox" name="register_problem" value="back" />
							</a>
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
</div>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>

</body></html>