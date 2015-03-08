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

	$id = $_GET['id'];
	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	$query = "SELECT * FROM user WHERE id = $id";
	$result = mysqli_query( $db, $query );
	
	if($row = mysqli_fetch_assoc($result))
	{
		//print_r($row);
	}else {
		//what if get nothing?
	}
?>


<div class="wrapper">

	<div id="MainContent">
	<div id="user-profile">
	<div id="user-profile-left">
		<table cellpadding="2" cellspacing="3" >
		   <tbody align="right">
				<tr><td><h1><?=NAME?></h1></td></tr>
				<tr><td><h1><?=GENDER?></h1></td></tr>
				<tr><td><h1><?=AGE?></h1></td></tr>
				<tr><td><h1><?=EMAIL?></h1></td></tr>
				<tr><td><h1><?=HEALTH_STATUS?></h1></td></tr>
				<tr><td><h1><?=STAR?></h1></td></tr>
			</tbody>
			
		</table>
	</div>

	<div id="user-profile-right">
		<table cellpadding="2" cellspacing="3" >
		   <tbody>
				<tr><td><h1><?= $row['name'] ?></h1></td></tr>
				<tr><td><h1><?php 
				if($row['gender']){
					echo 'female';
				}else{
					echo 'male';
				}  ?>
				</h1></td></tr>
				<tr><td><h1><?= $row['age'] ?></h1></td></tr>
				<tr><td><h1><?= $row['email'] ?></h1></td></tr>
				<tr><td><h1><?php 
				if($row['status'] == ''){
					echo 'no';
				}else{
					echo $row['status'];
				}  ?>
				</h1></td></tr>
				<tr><td><div id="user-profile-star" style="width:<?php
					$score = floor($row['scores'] / 320);
					echo $score * 32;
					?>px"><h1><?=$score?>/8</h1></div> </td></tr>
			</tbody>
			
		</table>
	</div>

	<div id="user-profile-gravatar">
		<img src='../interface/pictures/gravatar.jpg'/>
	</div>

	</div>
	</div>


	<button class="btn prev" onclick="javascript:history.go(-1);"><?=BACK?></button>
	<button class="btn next" onclick="onBtnClick()"><?=MODIFY?></button>


</div>

<script>

	function onBtnClick(){
		var uid = $.cookie('user-id');
		window.location ='profile_edit.php?id='+uid;	
	}
	
</script>

</body></html>