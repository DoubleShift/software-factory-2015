<<<<<<< HEAD
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

<script type="text/javascript">
	
function btn_next_onclick(){
	var user_name=document.getElementById("input_name").value;
	setCookie("username", user_name);   

	var required_input = $('input.required');

	if(required_input.size()){

		var empty_field = 0;

		required_input.each(function(){
			var value = $(this).val();
			if(value == ''){
				$(this).addClass('highlight');
				empty_field = empty_field + 1;
			}
		});

		if(empty_field > 0){
			alert(translations.emptyField);
		}else{
			window.location='register_general.php';
		}
		
	}else{
		window.location='register_general.php';
	}
	
}



</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Enter your name</h1>
		</div>
		<div class="body">
			<p>This will be the name for your registration that is assigned with your card.</p>
			<div class="register-wrap register-name">
				<table width="100%">
					<tr>
						<td>
							<input class="required" type="text" id="input_name" />
						</td>
						<td width="30">&nbsp;</td>
						<td>
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
=======
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

<script type="text/javascript">
	
function btn_next_onclick(){
	var user_name=document.getElementById("input_name").value;
	setCookie("username", user_name);   

	var required_input = $('input.required');

	if(required_input.size()){

		var empty_field = 0;

		required_input.each(function(){
			var value = $(this).val();
			if(value == ''){
				$(this).addClass('highlight');
				empty_field = empty_field + 1;
			}
		});

		if(empty_field > 0){
			alert(translations.emptyField);
		}else{
			window.location='register_general.php';
		}
		
	}else{
		window.location='register_general.php';
	}
	
}



</script>

<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Enter your name</h1>
		</div>
		<div class="body">
			<p>This will be the name for your registration that is assigned with your card.</p>
			<div class="register-wrap register-name">
				<table width="100%">
					<tr>
						<td>
							<input class="required" type="text" id="input_name" />
						</td>
						<td width="30">&nbsp;</td>
						<td>
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
>>>>>>> 3784f8ce353be9eea40819d98fc8b53922e3438f
</body></html>