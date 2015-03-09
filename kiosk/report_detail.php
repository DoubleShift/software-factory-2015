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

	var user_problem=document.getElementById("report_problem_detail").value;
	setCookie("report_problem_detail", user_problem);   
	location.href='report_success.php';

	
}

</script>
<div class="wrapper">

	<div class="content report-problem-detail-wrap">

		<div class="heading">
			<h1>Report the details</h1>
		</div>

		<div class="body">
			<table width="100%">
				<tr>
					<td colspan="3">
						<h2>Problematic equipment: <span id="problem-equipment"></span></h2>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<p>Describe the problem:</p>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<textarea style="width:100%;" id="report_problem_detail"></textarea>
					<td>
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

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>

