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

	/*var user_gender='';
	if(document.getElementsByName("register_gender").checked){
		user_gender = document.getElementsByName("register_gender").value;
		setCookie("usergender", user_gender);   
		alert(user_gender);
	};

	var user_age = '';
	if(document.getElementsByName("register_age").checked){
		user_age = document.getElementsByName("register_age").value;
		setCookie("userage", user_age);  
		alert(user_age); 
		
	}*/

	var user_gender = $('input[name="register_gender"]:checked').val();
	var user_age = $('input[name="register_age"]:checked').val();
	$.cookie('usergender', user_gender);
	$.cookie('userage', user_age);
	window.location.href='http://sfp.psicode.ru/kiosk/yini_register_experience.php';

	
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
						<td colspan="3" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td>
							<label>Gender</label>
						</td>
						<td width="30">&nbsp;</td>
						<td>
							<a href="#" class="option-block register-gender female"><span></span>Female
								<input type="radio" name="register_gender" value="female" />
							</a>
						
							<a href="#" class="option-block register-gender male"><span></span>Male
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
							<a href="#" class="option-block register-age">< 25
							<input type="radio" name="register_age" value="-25" />
							</a>
						
							<a href="#" class="option-block register-age">25 - 35
							<input type="radio" name="register_age" value="25-35" />
							</a>
						
							<a href="#" class="option-block register-age">36 - 50
							<input type="radio" name="register_age" value="36-50" />
							</a>
						
							<a href="#" class="option-block register-age">> 50
							<input type="radio" name="register_age" value="50+" />
							</a>
						</td>

					</tr>
					<tr>
						<td colspan="4" height="50">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
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
</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>