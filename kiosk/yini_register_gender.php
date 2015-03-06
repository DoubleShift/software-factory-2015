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
	var user_gender=document.getElementsByName("register_gender")[0].value;
	setCookie("usergender", user_gender);   

	var user_age=document.getElementsByName("register_age")[0].value;
	setCookie("userage", user_age);   
	location.href='register_experience.php';
}



</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Provide your general information</h1>
		</div>
		<div class="body">
			<form action="post" class="form register register-general">
				<table width="">
					<tr>
						<td>
							<label>Gender</label>
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<a href="#" class="register-block register-gender female"><span></span>Female
								<input type="radio" name="register_gender" value="female" />
							</a>
						
							<a href="#" class="register-block register-gender male"><span></span>Male
								<input type="radio" name="register_gender" value="male" />
							</a>
						</td>
					</tr>
					<tr>
						<td colspan="3" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td>
							<label>Age</label>
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<a href="#" class="register-block register-age">< 25
							<input type="radio" name="register_age" value="25-" />
							</a>
						
							<a href="#" class="register-block register-age">25 - 35
							<input type="radio" name="register_age" value="25-35" />
							</a>
						
							<a href="#" class="register-block register-age">36 - 50
							<input type="radio" name="register_age" value="36-50" />
							</a>
						
							<a href="#" class="register-block register-age">> 50
							<input type="radio" name="register_age" value="50+" />
							</a>
						</td>
					</tr>
					<tr>
						<td colspan="3" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<button class="btn prev" onclick="javascript:history.go(-1);"><span></span>Cancel</button>
						</td>
						<td align="right">
							<button class="btn next" onclick="btn_next_onclick()">Next<span></span></button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>