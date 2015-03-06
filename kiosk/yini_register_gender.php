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
				<table width="100%">
					<tr>
						<td>
							<label>Gender</label>
						</td>
						<td width="30">&nbsp;</td>
						<td colspan="3">
							<div class="register-gender female"><span></span>Female
								<input type="radio" name="register_gender" value="female" />
							</div>
						</td>
						<td width="30">&nbsp;</td>
						<td colspan="3">
							<div class="register-gender male"><span></span>Male
								<input type="radio" name="register_gender" value="male" />
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<label>Gender</label>
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<div class="register-age">< 25
							<input type="radio" name="register_age" value="25-" />
							</div>
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<div class="register-age">25 - 35
							<input type="radio" name="register_age" value="25-35" />
							</div>
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<div class="register-age">36 - 50
							<input type="radio" name="register_age" value="36-50" />
							</div>
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<div class="register-age">> 50
							<input type="radio" name="register_age" value="50+" />
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="6">
							<button class="btn prev" onclick="javascript:history.go(-1);">Cancel<span></span></button>
						</td>
						<td colspan="3" align="right">
							<button class="btn next" onclick="btn_next_onclick()">Next<span></span></button>
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