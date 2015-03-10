
<?php
// Include header
	include( dirname(__FILE__) . '/header.php' );

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
		var name = $.cookie("username");
    	$("#text-name").append(' '+name+'!');
	})

	function onBtnClick(pagename){
		var uid = $.cookie('userid');
		switch(pagename){
			case 'exercise':
				window.location ='exercise-plan.php';
				break;
			case 'goal':
				window.location ='goals.php';
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