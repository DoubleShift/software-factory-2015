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

	$query = "SELECT * FROM goals WHERE user_id = ".$_COOKIE['userid']." ORDER BY current DESC";
	
	
	
	
	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<div id="background-picture"></div>
<div class="page-title"><?=YOUR_GOALS?></div>
<table cellpadding="3" cellspacing="10" id="exercise-plan">

<?php 
if($result = mysqli_query( $db, $query ))
{	while($row = mysqli_fetch_assoc($result)) { ?> 
<tr valign="middle" class="goal-row">
	<td class="goal-description"><?php echo GoalDescription($row['type'])?></td>
	<td class="goal-progress"><div class="green-bg progress-bar" style="width:<?php echo 100*$row['current']/$row['max'];?>%">&nbsp;</div></td>
	<td class="goal-numbers"><?php echo $row['current'].'/'.$row['max'];?></td>
</tr>

<?php }} ?>

</table>


<div class="bottom">
	<div class="left green-bg button" onclick="location.href='welcome.php'"><?=MENU?></div>
	<div class="right green-bg button" onclick="location.href='goal-select.php'"><?=ADD_GOAL?></div> 
</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>