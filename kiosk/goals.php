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
	
	if(isset($_GET['action']) && isset($_GET['value']))
	{
		$query = "INSERT INTO goals 
		( `user_id`, `type`, `max`, `current`) 
		VALUES ( ".$_COOKIE['userid'].", ".$_GET['action'].", ".$_GET['value'].", 0 )";
		
		mysqli_query( $db, $query );
	}

	$query = "SELECT * FROM goals WHERE user_id = ".$_COOKIE['userid']." ORDER BY current DESC";
	
	
	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<div class="body" style="width: 1000px; margin: 0 auto;">
<!--<div id="background-picture"></div>-->
<div class="page-title" style="margin: 0 0 20px;"><?=YOUR_GOALS?></div>
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


<!--<div class="bottom">
	<div class="left green-bg button" onclick="location.href='welcome.php'"><?=MENU?></div>
	<div class="right green-bg button" onclick="location.href='goal-select.php'"><?=ADD_GOAL?></div> 
</div>-->

<table width="100%" style="margin: 0 auto;">	
<tr>
	<td colspan="2" height="10">&nbsp;</td>
</tr>
<tr>
	<td>
		<button class="btn" onclick="location.href='welcome.php'"><?=MENU?></button>
	</td>
	<td align="right">
		<button class="btn next" onclick="location.href='goal-select.php'"><?=ADD_GOAL?></button>
	</td>
</tr>
</table>

</div>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>