<?php

/*
File: profile.php
Description: user profile.
Author: Chen Xin
Version: 0.1
Created: 08.03.2015
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
		setcookie('username',$row['name']);
	}else {
		//what if get nothing?
	}
?>


<div class="wrapper">

	<div class="content">
	<div id="user-profile">
	<div id="user-profile-left">
		<table cellpadding="2" cellspacing="3" >
		   <tbody align="right">
				<tr><td><span class="label"><?=NAME?></span></td></tr>
				<tr><td><span class="label"><?=GENDER?></span></td></tr>
				<tr><td><span class="label"><?=AGE?></span></td></tr>
				<tr><td><span class="label"><?=EMAIL?></span></td></tr>
				<tr><td><span class="label"><?=HEALTH_STATUS?></span></td></tr>
				<tr><td><span class="label"><?=STAR?></span></td></tr>
			</tbody>
			
		</table>
	</div>

	<div id="user-profile-right">
		<table cellpadding="2" cellspacing="3" >
		   <tbody>
				<tr><td><?= $row['name'] ?></td></tr>
				<tr><td><?php 
				if($row['gender']){
					echo 'female';
				}else{
					echo 'male';
				}  ?>
				</td></tr>
				<tr><td><?= $row['age'] ?></td></tr>
				<tr><td><?= $row['email'] ?></td></tr>
				<tr><td><?php 
				if($row['status'] == ''){
					echo 'no';
				}else{
					echo $row['status'];
				}  ?>
				</td></tr>
				<tr><td><div id="user-profile-star" style="width:<?php
					$score = floor($row['scores'] / 320);
					echo $score * 32;
					?>px"><?=$score?>/8</div> </td></tr>
			</tbody>
			
		</table>
	</div>

	<div id="user-profile-gravatar">
		<img src='../interface/pictures/gravatar.jpg'/>
	</div>

	</div>
	</div>

	<table width="100%">
	<tr>
	<td>
	<button class="btn prev" onclick="javascript:window.location.href='welcome.php';"><?=BACK?></button>
	</td>
	<td align="right">
	<button class="btn next" onclick="onBtnClick()"><?=MODIFY?></button>
	</td>
	</tr>
	</table>

</div>

<script>

	function onBtnClick(){
		var uid = $.cookie('userid');
		window.location ='profile_edit.php?id='+uid;	
	}
	
</script>

</body></html>