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

	
	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<div class="body" style="width: 1000px; margin: 0 auto;">
<!--<div id="background-picture"></div>-->
<div class="page-title" style="margin: 0 0 20px;"><?=EXPORT?></div>


<table width="100%">
	<tr>
		<td colspan="3" height="30">&nbsp;</td>
	</tr>
	<tr>
		<td>
			<label>Information to export</label>
		</td>
		<td width="30">&nbsp;</td>
		<td>
			<a href="#" class="option-block register-age">Profile information
			<input type="checkbox" name="register_age" value="-25" />
			</a>
		
			<a href="#" class="option-block register-age">Goals
			<input type="checkbox" name="register_age" value="25-35" />
			</a>
		
			<a href="#" class="option-block register-age">Challanges
			<input type="checkbox" name="register_age" value="36-50" />
			</a>
		</td>
	</tr>
	<tr>
		<td colspan="3" height="30">&nbsp;</td>
	</tr>
	<tr>
		<td>
			<label>Export to</label>
		</td>
		<td width="30">&nbsp;</td>
		<td>
			<a href="#" class="option-block register-age" style="min-width:250px; margin-bottom:10px;">My e-mail
			<input type="radio" name="register_age" value="-25" />
			</a>
			<br>
			<a href="#" class="option-block register-age"  style="min-width:250px;">Other e-mail
			<input type="radio" name="register_age" value="25-35" />
			</a>
			<input type="text" style="width:400px; top:-8px; position: relative;">
		</td>

	</tr>
</table>

<table width="940" style="margin: 0 auto;">	
<tr>
	<td colspan="3" height="10">&nbsp;</td>
</tr>
<tr>
	<td align="left">
		<button class="btn orange" onclick="location.href='welcome.php'"><?=MENU?></button>
	</td>
	<td align="right">
		<button class="btn next" onclick="location.href='exportdone.php'"><?=EXPORT?></button> 
	</td>
</tr>
</table>

</div>


<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>