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




<!--<div id="background-picture"></div>-->
<div class="body exercise-type" style="width: 1000px; margin: 0 auto;">
<div class="page-title" style="margin: 0 0 20px;">Challenge your friends: </div>


<table cellpadding="3" cellspacing="10" border="0" id="exercise-plan">
<tr valign="middle">
<td align="center"><div>
	<div class="exercise-title">Penny</div>
	<div id='indicatorContainer1' style="position:absolute; left:220px; top:240px"></div>
	<img  src="<?=IP_PICTURES?>gravatar2.png" style="position:absolute; left:235px; top:255px"/>
</div></td>

<td align="center"><div>
	<img class="exercise-image" src="<?=IP_PICTURES?>vs.jpg" />
</div></td>

<td align="center"><div>
<div class="exercise-title">Penny</div>
	<div id='indicatorContainer2' style="position:absolute; left:620px; top:240px"></div>
	<img  src="<?=IP_PICTURES?>gravatar2.png" style="position:absolute; left:635px; top:255px"/>
</div></td>
</tr></table>




<table width="1024" style="margin: 0 auto;">	
<tr>
	<td colspan="3" height="10">&nbsp;</td>
</tr>
<tr>
	<td align="left">
		<div class="btn" onclick="location.href='exercise-type.php'">Back</div>
	</td>
	
	<td align="right">
		<div class="btn" onclick="location.href='go.php'">Continue</div> 
	</td>
</tr>
</table>



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
        radius: 100,
        barWidth: 10,
        initValue: 70,
        roundCorner : true,
        percentage: true
    });
</script>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>