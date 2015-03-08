<?php

/*
File: register_general.php
Description: user general info.
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

	var user_gender = $('input[name="register_gender"]:checked').val();
	var user_age = $('input[name="register_age"]:checked').val();
	
	$.cookie('usergender', user_gender);
	$.cookie('userage', user_age);

	window.location='register_experience.php';
	
}



</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Provide your general information</h1>
		</div>
		<div class="body">
			<div class="register-wrap register-general">
				<table width="100%">
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
								<input class="required" type="radio" name="register_gender" value="female" />
							</a>
						
							<a href="#" class="option-block register-gender male"><span></span>Male
								<input class="required" type="radio" name="register_gender" value="male" />
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
							<input type="radio" name="register_age" value="50-" />
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
			</div>
		</div>
	</div>
</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>