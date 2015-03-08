<<<<<<< HEAD
<?php

/*
File: register_experience.php
Description: exercise experience
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

	var user_exp = $('input[name="register_experience"]:checked').val();
	
	$.cookie('userexperience', user_exp);

	window.location ='register_problem.php';
}

</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Provide your exercise experience</h1>
		</div>
		<div class="body">
			<div class="register-wrap register-experience">
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>How often do you expercise per week?</label>
						</td>
					</tr>
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<a href="#" class="option-block register-experience">< 2 times
								<input type="radio" name="register_experience" value="<2" />
							</a>
							<a href="#" class="option-block register-experience">2 - 3 times
								<input type="radio" name="register_experience" value="2-3" />
							</a>
							<a href="#" class="option-block register-experience">> 3 times
								<input type="radio" name="register_experience" value=">3" />
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
=======
<?php

/*
File: register_experience.php
Description: exercise experience
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

	var user_exp = $('input[name="register_experience"]:checked').val();
	
	$.cookie('userexperience', user_exp);

	window.location ='register_problem.php';
}

</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Provide your exercise experience</h1>
		</div>
		<div class="body">
			<div class="register-wrap register-experience">
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>How often do you expercise per week?</label>
						</td>
					</tr>
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<a href="#" class="option-block register-experience">< 2 times
								<input type="radio" name="register_experience" value="<2" />
							</a>
							<a href="#" class="option-block register-experience">2 - 3 times
								<input type="radio" name="register_experience" value="2-3" />
							</a>
							<a href="#" class="option-block register-experience">> 3 times
								<input type="radio" name="register_experience" value=">3" />
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
>>>>>>> 3784f8ce353be9eea40819d98fc8b53922e3438f
</body></html>