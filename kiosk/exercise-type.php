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

<div id="background-picture"></div>

<div class="page-title"><?=SELECT_EXERCISE_TYPE?></div>
<table cellpadding="3" cellspacing="10" border="0" id="exercise-plan">
<tr valign="middle">
<td align="center"><div class="exercise-item" onclick="location.href='exercise-plan.php?type=1'">
	<div class="exercise-title">
	<?=AEROBIC?></div>
	<img class="exercise-image" src="<?=IP_PICTURES?>type_3.png" />
	<div class="exercise-description"><?=AEROBIC_DSCR?></div>
</div></td>
<td align="center"><div class="exercise-item" onclick="location.href='exercise-plan.php?type=2'">
	<div class="exercise-title">
	<?=FITNESS?></div>
	<img class="exercise-image" src="<?=IP_PICTURES?>type_2.png" />
	<div class="exercise-description"><?=FITNESS_DSCR?></div>
</div></td>
<td align="center"><div class="exercise-item" onclick="location.href='exercise-plan.php?type=3'">
	<div class="exercise-title">
	<?=POWER?></div>
	<img class="exercise-image" src="<?=IP_PICTURES?>type_1.png" />
	<div class="exercise-description"><?=POWER_DSCR?></div>
</div></td>
</tr></table>

<div class="bottom">
	<div class="orange-bg button" onclick="location.href='welcome.php'"><?=MENU?></div>
</div>



<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>