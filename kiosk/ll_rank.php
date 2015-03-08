<?php

/*
File: rank.php
Description: Top User page.
Author: Liu Lei
Version: 0.1
Created: 23.02.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );
	
	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>

<div id="welcome-picture"></div>
		<div id = "UserRank">
			<div id="MainContent">
			<h1 class="title"><?=RANK_TOP_USERS?></h1>
			<table cellpadding="0" cellspacing="1" id="ranktable">
		   
				<thead>
					<tr class="ranktitle"><th><?=RANK_RANK?></th><th><?=RANK_NAME?></th><th><?=RANK_STAR_LEVEL?></th><th><?=RANK_SCORES?></th></tr>
				</thead>
		   
				<tbody>
					<tr class="rankitem"><td>1</td><td>Anna</td><td><div class="starbox"><div class="star" style="width:240px"></div></div></td><td>1807</td></tr>
					<tr class="rankitem2"><td>2</td><td>Kenny</td><td><div class="star" style="width:224px"></div></td><td>1612</td></tr>
					<tr class="rankitem"><td>3</td><td>Jarmo</td><td><div class="star" style="width:208px"></div></td><td>1400</td></tr>
					<tr class="rankitem2"><td>4</td><td>Kaimo</td><td><div class="star" style="width:160px"></div></td><td>1228</td></tr>
					<tr class="rankitem"><td>5</td><td>Tomi</td><td><div class="star" style="width:96px"></div></td><td>966</td></tr>
					<tr class="rankitem2"><td>6</td><td>Tinna</td><td><div class="star" style="width:80px"></div></td><td>830</td></tr>
					<tr class="rankitem"><td>7</td><td>Mary</td><td><div class="star" style="width:64px"></div></td><td>674</td></tr>
					<tr class="rankitem2"><td>8</td><td>Jenny</td><td><div class="star" style="width:48px"></div></td><td>487</td></tr>
					<tr class="rankitem"><td>9</td><td>Steven</td><td><div class="star" style="width:32px"></div></td><td>325</td></tr>
					<tr class="rankitem2"><td>10</td><td>Green</td><td><div class="star" style="width:16px"></div></td><td>171</td></tr>
				</tbody>
			
		   </table>
		   </div>
		</div>

		<button class="button-back" onclick="javascript:history.go(-1);"><?=BACK?></button>
</div>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>