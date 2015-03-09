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
	function btn_next_onclick(){
	  
		location.href='welcome.php';
	}
</script>

<div class="wrapper">
	<div class="content report-success-wrap">

		<div class="heading">
				<h1>Problem report submited successfully</h1>
		</div>

		<div class="body">

			<p>Thanks for your report!<br>We will look into the problem as soon as possible and fix the problem.</p>

			<table width="100%">
				<tr>
					<td align="right">
						<button class="btn next" onclick="btn_next_onclick()">Go to welcome page</button>
					</td>
				</tr>
			</table>

		</div>
	</div>
</div>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>

