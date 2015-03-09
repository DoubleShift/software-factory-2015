<?php

/*
File: login.php
Description: Login page.
Author: Alexander Samodelkin
Version: 0.1
Created: 13.02.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );
	
	$query = "SELECT * FROM exercise_plan WHERE user_id = ".$_COOKIE['userid'];
	
	//echo "DEBUG: ".$query;
	
	$result = mysqli_query( $db, $query );
	
	//echo "[".mysqli_num_rows($result)."]";
	
	$row = mysqli_fetch_assoc($result);

?>
<div class="wrapper">

<table cellpadding="3" cellspacing="10" border="0" id="exercise-plan">
<tr valign="middle">
<td align="center">
		<div id="login-text"><?=GO_TO_EXERCISE?></div>
	<div class="exercise-item">
		<div class="exercise-title">
		<?php echo ExerciseTitle($row['ex1_type']); ?></div>
		<img class="exercise-image" src="<?=IP_PICTURES?>exercise/icon<?php echo $row['ex1_type'];?>.png" />
		<div class="exercise-level">
		<?php echo ExercisePrefix($row['ex1_type']); echo round($row['ex1_level']*$row['difficulty']/5); echo ExercisePostfix($row['ex1_type']); ?></div>
		<div class="exercise-description"><?php echo ExerciseDescription($row['ex1_type']); ?></div>
	</div>
</td></tr></table>


</div>

</body></html>