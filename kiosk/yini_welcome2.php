<?php
// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<div id="background-picture"></div>

<table class = "welcome-table" 	cellpadding = "50px" >
	<tr>
  		<td><div class = "welcome-gird"><i></i>
  			<img class = "welcome-icon"src="../interface/pictures/icon-running.png"></img>
  			<a class = "welcome-text" href="exercise-plan.php"><?=EXERCISE?></a>
  			</div>
  		</td>
  		<td><div class = "welcome-gird"><i></i>
  			<img class = "welcome-icon"src="../interface/pictures/icon-note.png"></img>
  			<a class = "welcome-text" href="goals.php"><?=GOALS?></a>
  			</div>
  		</td>
	</tr>
	<tr>
		<td><div class = "welcome-gird"><i></i>
  			<img class = "welcome-icon"src="../interface/pictures/icon-profile.png"></img>
  			<a class = "welcome-text" href="profile.php"><?=PROFILE?></a>
  			</div>
  		</td>
  		<td><div class = "welcome-gird"><i></i>
  			<img class = "welcome-icon"src="../interface/pictures/icon-star.png"></img>
  			<a class = "welcome-text" href="rank.php"><?=RANK?></a>
  			</div>
  		</td>
	</tr>
</table>

<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>