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

	var problem_equipment = [];

	$('input[name="problem_equipment"]:checked').each(function(){
		var equipment_name = $(this).val();
		problem_equipment.push(equipment_name);
	});
	
	$.cookie('problemequipment', problem_equipment);

	window.location ='report_detail.php';
}

</script>
<div class="wrapper">

	<div class="content register-name">

		<div class="heading">
				<h1>Report a problem</h1>
		</div>

		<div class="body">
			<table width="100%">
				<tr>
					<td colspan="3">
						<h2 >Select the problematic equipment</h2>
					</td>
				</tr>
				<tr>
					<td>
						<div class="option-block report-block">
							<span class="block-title">Bicycle</span>
							<div class="report_img">						
							<img src="../interface/pictures/icon-bicycle.png"></img>
							<input type="checkbox" name="problem_equipment" value="bicycle" />
						</div>				
					</td>
					<td >
						<div class="option-block report-block">
							<span class="block-title">Running machine</span>
							<div class="report_img">
							<img src="../interface/pictures/icon-running.png"></img>
							<input type="checkbox" name="problem_equipment" value="running_machine" />
						</div>
					</td>
					<td>
						<div class="option-block report-block">
							<span class="block-title">Dumbbell</span>
							<div class="report_img">
							<img src="../interface/pictures/icon-dumbbell.png"></img>	
							<input type="checkbox" name="problem_equipment" value="dumbbell" />
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="3" height="30"></td>
				</tr>
				<tr>
					<td>
						<button class="btn prev" onclick="JavaScript:history.go(-1);">Back</button>
					</td>
					<td>
					</td>
					<td align="right">
						<button class="btn next" onclick="btn_next_onclick()">Next</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>

