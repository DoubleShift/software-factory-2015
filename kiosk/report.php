<?php

/*
File: report.php
Description: report a problem.
Author: Deng Canrong
Version: 0.2
Created: 7.03.2015
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
<div id="report"></div>

	<div class="heading">
			<h1>Report a problem</h1>
			
		</div>
	<div class="body">
	<table width="100%">
	<tr>
	<td colspan="3">
	 <h2 >Select the problematic equipment</h2></td>
	</tr>
	
	<tr>
	<td >
		<div class="option-block report_left">
			<h3 align="center"> <br /> Bicycle</h3>
			<div class="report_img">						
			<img src="../interface/pictures/icon04.png"></img>
			<input type="checkbox" name="problem_report" value="bicycle" />
		</div>						
							
	</td>
	<td >
		<div class="option-block report_center">
			<h3 align="center"><br /> Running machine</h3>
			<div class="report_img">
			<img src="../interface/pictures/icon-running.png"></img>
			<input type="checkbox" name="problem_report" value="running_machine" />
		</div>
			
	</td>
	<td>
		<div class="option-block report_right">
			<h3 align="center"> <br />Dumbbell</h3>
			<div class="report_img">
			<img src="../interface/pictures/icon01.png"></img>	
			<input type="checkbox" name="problem_report" value="dumbbell" />
		</div>
	</td>
	</tr>
	
	<tr>
	</tr>
	<tr ><td colspan="3"><br />
	<h2>Describe the problem</h2></td>
	</tr>
	<tr>
	<td colspan="3">
	<textarea style="width:100%;" id="report_problem"></textarea>
	<td>
	<tr height=20>
	</tr>
	<tr>
						<td>
							<button class="btn prev" onclick="JavaScript:history.go(-1);">Back</button>
						</td>
						<td>
						</td>
						<td align="right">
							<button class="btn next" onclick="btn_next_onclick()">Send</button>
						</td>
					</tr>
	</table>
</div>
</div>
</div>
</div>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>

