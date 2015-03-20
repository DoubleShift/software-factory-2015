<?php

/*
File: challenge.php
Description: have a challenge with your friends.
Author: Chen Xin
Version: 0.1
Created: 20.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>





<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Challenge your friends!</h1>
		</div>
		<div class="body">
		
			<div class="register-wrap register-email">
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<p>My Name</p>
							<div id='indicatorContainer1' style="position:absolute; left:220px; top:240px"></div>
							<img  src="<?=IP_PICTURES?>gravatar2.png" style="position:absolute; left:235px; top:255px"/>
						</td>
						<td colspan="2">
							<img class="exercise-image" style="position:absolute; left:520px; top:240px" src="<?=IP_PICTURES?>vs.jpg" />
						</td>
						<td colspan="2">
							<p>Penny</p>
							<div id='indicatorContainer2' style="position:absolute; left:720px; top:240px"></div>
							<img  src="<?=IP_PICTURES?>gravatar2.png" style="position:absolute; left:735px; top:255px"/>
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
	<div class="keyboard"></div>
</div>




<script>
  $('#indicatorContainer1').radialIndicator({
        barColor: '#87CEEB',
        radius: 105,
        barWidth: 10,
        initValue: 40,
        roundCorner : true,
        percentage: true
    });

   $('#indicatorContainer2').radialIndicator({
        barColor: '#87CEEB',
        radius: 105,
        barWidth: 10,
        initValue: 70,
        roundCorner : true,
        percentage: true
    });
</script>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>