<?php

/*
File: exercise-plan.php
Description: exercise plan page.
Author: Alexander Samodelkin
Version: 0.1
Created: 13.02.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );
	
	if(isset($_GET['level']))
	{
		if($_GET['level']>0)
		{
			$query = "UPDATE exercise_plan SET difficulty = difficulty+1 WHERE user_id = ".$_COOKIE['user-id'];
		}
		else
		{
			$query = "UPDATE exercise_plan SET difficulty = difficulty-1 WHERE user_id = ".$_COOKIE['user-id'];			
		}
		$result = mysqli_query( $db, $query );
	}

	$query = "SELECT * FROM exercise_plan WHERE user_id = ".$_COOKIE['user-id'];
	
	//echo "DEBUG: ".$query;
	
	$result = mysqli_query( $db, $query );
	
	//echo "[".mysqli_num_rows($result)."]";
	
	$row = mysqli_fetch_assoc($result);
	
	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<div id="background-picture"></div>
<div class="page-title"><?=YOUR_EXERCISE_PLAN?> <?php echo round(20*$row['difficulty']/5);?> <?=MINUTES?></div>
<table cellpadding="3" cellspacing="10" border="0" id="exercise-plan">
<tr valign="middle">
<td align="center"><div class="exercise-item">
	<div class="exercise-title">
	<?php echo ExerciseTitle($row['ex1_type']); ?></div>
	<img class="exercise-image" src="<?=IP_PICTURES?>exercise/icon<?php echo $row['ex1_type'];?>.png" />
	<div class="exercise-level">
	<?php echo ExercisePrefix($row['ex1_type']); echo round($row['ex1_level']*$row['difficulty']/5); echo ExercisePostfix($row['ex1_type']); ?></div>
	<div class="exercise-description"><?php echo ExerciseDescription($row['ex1_type']); ?></div>
</div></td>
<td align="center" class="exercise-arrow">&nbsp;</td>
<td align="center"><div class="exercise-item">
	<div class="exercise-title">
	<?php echo ExerciseTitle($row['ex2_type']); ?></div>
	<img class="exercise-image" src="<?=IP_PICTURES?>exercise/icon<?php echo $row['ex2_type'];?>.png" />
	<div class="exercise-level">
	<?php echo ExercisePrefix($row['ex2_type']); echo round($row['ex2_level']*$row['difficulty']/5); echo ExercisePostfix($row['ex2_type']); ?></div>
	<div class="exercise-description"><?php echo ExerciseDescription($row['ex2_type']); ?></div>
</div></td>
<td align="center" class="exercise-arrow">&nbsp;</td>
<td align="center"><div class="exercise-item">
	<div class="exercise-title">
	<?php echo ExerciseTitle($row['ex3_type']); ?></div>
	<img class="exercise-image" src="<?=IP_PICTURES?>exercise/icon<?php echo $row['ex3_type'];?>.png" />
	<div class="exercise-level">
	<?php echo ExercisePrefix($row['ex3_type']); echo round($row['ex3_level']*$row['difficulty']/5); echo ExercisePostfix($row['ex3_type']); ?></div>
	<div class="exercise-description"><?php echo ExerciseDescription($row['ex3_type']); ?></div>
</div></td>
<td align="center" class="exercise-arrow">&nbsp;</td>
<td align="center"><div class="exercise-item">
	<div class="exercise-title">
	<?php echo ExerciseTitle($row['ex4_type']); ?></div>
	<img class="exercise-image" src="<?=IP_PICTURES?>exercise/icon<?php echo $row['ex4_type'];?>.png" />
	<div class="exercise-level">
	<?php echo ExercisePrefix($row['ex4_type']); echo round($row['ex4_level']*$row['difficulty']/5); echo ExercisePostfix($row['ex4_type']); ?></div>
	<div class="exercise-description"><?php echo ExerciseDescription($row['ex4_type']); ?></div>
</div></td>
</tr></table>

<div class="center difficulty-wrapper">
	<div class="button level-button green-bg" onclick="location.href='<?php echo curPage();?>?level=-1'">-</div>
	<div class="deficulty button"><?=EXERCISE_DIFFICULTY?> <?php echo $row['difficulty'] ?></div>
	<div class="button level-button green-bg" onclick="location.href='<?php echo curPage();?>?level=1'">+</div>
</div>

<div class="bottom">
	<div class="left green-bg button"><?=CHANGE_TYPE?></div>
	<div class="orange-bg button" onclick="location.href='welcome.php'"><?=MENU?></div>
	<div class="right green-bg button"><?=START_EXERCISE?></div> 
</div>




<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>