
<?php
// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>

<div class="wrapper">

	<div class="content welcome">
   		<h1 id='text-name'><?=WELCOME?></h1>
		<div class="row">
			<a href="#" class="col left exercise" onclick=onBtnClick('exercise')>Exercise</a>
			<a href="#" class="col right goal" onclick=onBtnClick('goal')>Goals</a>
		</div>
		<div class="row">
			<a href="#" class="col left profile" onclick=onBtnClick('profile')>Profile</a>
			<a href="#" class="col right rank" onclick=onBtnClick('rank')>Top users</a>
		</div>
	</div>
</div>

<script>
	$().ready(function(){
		var name = $.cookie("user-name");
    	$("#text-name").append(' '+name+'!');
	})

	function onBtnClick(pagename){
		var uid = $.cookie('user-id');
		switch(pagename){
			case 'exercise':
				window.location ='exercise.php?id='+uid;
				break;
			case 'goal':
				window.location ='goal.php?id='+uid;
			break;
			case 'profile':
				window.location ='profile.php?id='+uid;
			break;
			case 'rank':
				window.location ='rank.php';
			break;
		}
	}
</script>

</body></html>