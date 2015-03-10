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

<script>

function btn_next_onclick(){

	var user_exp = $('input[name="register_experience"]:checked').val();

	if(user_exp){
		$.cookie('userexperience', user_exp);
		window.location ='register_problem.php';
	}else{
		alert('please choose one!');
	}

}

</script>

<div class="body" style="width: 1000px; margin: 0 auto;">
<!--<div id="background-picture"></div>-->
<div class="page-title" style="margin: 0 0 20px;"><?=YOUR_GOALS_ADD?></div>



<form id="frm-goal" action="goals.php" method="get">

<table id="goals-items" cellspacing="10" border="0" align="center">
<tr><td>
	<a href="#" class="option-block register-experience goal-select"><?=GOAL1?>
		<input type="radio" name="action" value="1" />
	</a>
	
	<a href="#" class="option-block register-experience goal-select"><?=GOAL2?>
		<input type="radio" name="action" value="2" />
	</a>
	
	<a href="#" class="option-block register-experience goal-select"><?=GOAL3?>
		<input type="radio" name="action" value="3" />
	</a>
	<a href="#" class="option-block register-experience goal-select"><?=GOAL4?>
		<input type="radio" name="action" value="4" />
	</a>
</td></tr><tr><td>&nbsp;</td></tr>
<tr><td align="center">
	
			<?=AMOUNT?> <input type="text" style="width: 300px;" name="value" id="uid">
</td></tr>
</table>

</form>


<!--<div class="bottom">
	<div class="left green-bg button" onclick="location.href='goals.php'"><?=BACK?></div>
	<div class="right green-bg button" onclick="document.forms['frm-goal'].submit();"><?=ADD_GOAL?></div> 
</div>-->

<table width="100%" style="margin: 0 auto;">	
<tr>
	<td colspan="2" height="10">&nbsp;</td>
</tr>
<tr>
	<td>
		<button class="btn prev" onclick="location.href='goals.php'"><?=BACK?></button>
	</td>
	<td align="right">
		<button class="btn next" onclick="document.forms['frm-goal'].submit();"><?=ADD_GOAL?></button> 
	</td>
</tr>
</table>

</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>