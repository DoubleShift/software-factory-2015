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
	
	if(isset($_GET['type']))
	{
		// need to change type
		$query = "DELETE FROM exercise_plan WHERE user_id = ".$_COOKIE['userid'];
		mysqli_query( $db, $query );
		
		if($_GET['type']==1)
		{
			$query = "INSERT INTO `exercise_plan` 
			( `user_id`, `exercise_type`, `difficulty`, `ex1_type`, `ex1_level`,`ex2_type`, `ex2_level`,`ex3_type`, `ex3_level`, `ex4_type`, `ex4_level` ) 
			VALUES ( ".$_COOKIE['userid'].", 1, 5, 2, 5, 4, 5, 2, 5, 4, 5 )";
		}
		
		if($_GET['type']==2)
		{
			$query = "INSERT INTO `exercise_plan` 
			( `user_id`, `exercise_type`, `difficulty`, `ex1_type`, `ex1_level`,`ex2_type`, `ex2_level`,`ex3_type`, `ex3_level`, `ex4_type`, `ex4_level` ) 
			VALUES ( ".$_COOKIE['userid'].", 2, 5, 2, 5, 3, 15, 2, 5, 3, 15 )";	
		}
		
		if($_GET['type']==3)
		{
			$query = "INSERT INTO `exercise_plan` 
			( `user_id`, `exercise_type`, `difficulty`, `ex1_type`, `ex1_level`,`ex2_type`, `ex2_level`,`ex3_type`, `ex3_level`, `ex4_type`, `ex4_level` ) 
			VALUES ( ".$_COOKIE['userid'].", 1, 5, 4, 5, 1, 15, 3, 15, 1, 15 )";	
		}
		
		mysqli_query( $db, $query );
	}
	
	if(isset($_GET['level']))
	{
		if($_GET['level']>0)
		{
			$query = "UPDATE exercise_plan SET difficulty = difficulty+1 WHERE user_id = ".$_COOKIE['userid'];
		}
		else
		{
			$query = "UPDATE exercise_plan SET difficulty = difficulty-1 WHERE user_id = ".$_COOKIE['userid'];			
		}
		$result = mysqli_query( $db, $query );
	}

	$query = "SELECT * FROM exercise_plan WHERE user_id = ".$_COOKIE['userid'];
	
	//echo "DEBUG: ".$query;
	
	$result = mysqli_query( $db, $query );
	
	//echo "[".mysqli_num_rows($result)."]";
	
	$row = mysqli_fetch_assoc($result);
	
	$difficulty = $row['difficulty'];
	
	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<div class="body" style="width: 1000px; margin: 0 auto;">
<!--<div id="background-picture"></div>-->
<div class="page-title" style="margin: 0 0 20px;"><?=YOUR_EXERCISE_PLAN?> <?php echo round(20*$row['difficulty']/5);?> <?=MINUTES?></div>
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

<div id="light" class="white_content">
Recommended levels
<table width="100%" cellspacing="4" id="weight-table">
<tr class="colored-line"><td>Weight (kg)</td><td>Recommended level for male</td><td> Recommended level for female</td></tr>
<tr><td>less than 50</td><td>1</td><td>3</td></tr>
<tr class="colored-line"><td>from 50 to 55</td><td>2</td><td>4</td></tr>
<tr><td>from 55 to 60</td><td>3</td><td>5</td></tr>
<tr class="colored-line"><td>from 60 to 65</td><td>4</td><td>6</td></tr>
<tr><td>from 65 to 70</td><td>5</td><td>7</td></tr>
<tr class="colored-line"><td>from 70 to 75</td><td>6</td><td>8</td></tr>
<tr><td>from 75 to 80</td><td>7</td><td>9</td></tr>
<tr class="colored-line"><td>from 80 to 85</td><td>8</td><td>10</td></tr>
<tr><td>from 85 to 90</td><td>9</td><td>11</td></tr>
<tr class="colored-line"><td>from 90 to 95</td><td>10</td><td>12</td></tr>
<tr><td>more than 95 </td><td>11</td><td>13</td></tr>
</table>
<a class="green-bg button" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
<div id="fade" class="black_overlay"></div>

<div class="center difficulty-wrapper">
	<div class="button level-button green-bg" <?php if($difficulty>2) {?> onclick="location.href='<?php echo curPage();?>?level=-1'" <?php }?>>-</div>
	<div class="deficulty button"><?=EXERCISE_DIFFICULTY?> <?php echo $row['difficulty'] ?></div>
<img src="<?php echo IP_PICTURES; ?>question-blue.png" id="help-image" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
	<div class="button level-button green-bg" <?php if($difficulty<15) {?> onclick="location.href='<?php echo curPage();?>?level=1'" <?php }?>>+</div>
</div>

<!--<div class="bottom">
	<div class="left green-bg button" onclick="location.href='exercise-type.php'"><?=CHANGE_TYPE?></div>
	<div class="orange-bg button" onclick="location.href='welcome.php'"><?=MENU?></div>
	<div class="right green-bg button" onclick="location.href='go.php'"><?=START_EXERCISE?></div> 
</div>-->

<table width="940" style="margin: 0 auto;">	
<tr>
	<td colspan="3" height="10">&nbsp;</td>
</tr>
<tr>
	<td>
		<button class="btn" onclick="location.href='exercise-type.php'"><?=CHANGE_TYPE?></button>
	</td>
	<td align="center">
		<button class="btn orange" onclick="location.href='welcome.php'"><?=MENU?></button>
	</td>
	<td align="right">
		<button class="btn" onclick="location.href='go.php'"><?=START_EXERCISE?></button> 
	</td>
</tr>
</table>

</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>