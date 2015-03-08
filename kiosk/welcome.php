
<?php
// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>

<div class="wrapper">
<script>
$().ready(function(){
	var name = $.cookie("user-name");
    $("#text-name").append(' '+name+'!');
})
</script>
	<div class="content welcome">
   		<h1 id='text-name'><?=WELCOME?></h1>
		<div class="row">
			<a href="#" class="col left exercise">Exercise</a>
			<a href="#" class="col right goal">Goals</a>
		</div>
		<div class="row">
			<a href="#" class="col left profile">Profile</a>
			<a href="#" class="col right rank">Top users</a>
		</div>
	</div>
</div>

</body></html>