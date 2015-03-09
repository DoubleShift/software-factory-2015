<?php

/*
File: profile_edit.php
Description: edit user profile. is it really necessary?
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
	}else {
		//what if get nothing?
	}
?>


<div class="wrapper">

	<div class="content">
		<div class="body">
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
							<tr><td><input id="user-name" type="text" style="height:40px;" value="<?= $row['name'] ?>"></td></tr>
							<tr><td><?php 
							if($row['gender']){
								echo 'female';
							}else{
								echo 'male';
							}  ?>
							</td></tr>
							<tr><td><?= $row['age'] ?></td></tr>
							<tr><td><input id="user-email" type="text" style="height:40px;" value="<?= $row['email'] ?>"></td></tr>
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
								?>px"></div> <?=$score?>/8</td></tr>
						</tbody>
						
					</table>
				</div>

				<div id="user-profile-gravatar">
					<img src='../interface/pictures/gravatar.jpg'/>
				</div>

			</div>

			<table width="100%">
			<tr>
			<td>
				<button class="btn prev" onclick="javascript:window.location.href='profile.php?id=<?=$id?>';"><?=BACK?></button>
			</td>
			<td align="right">
				<button class="btn next" onclick="onBtnClick()"><?=SAVE?></button>
			</td>
			</tr>
			</table>

		</div>
	</div>
</div>

<script>

	function onBtnClick(){

		var value 	= {};
		value.id 	= $.cookie('userid');
		value.name 	= $("#user-name").val();
		value.email = $("#user-email").val();
	
		if(value.name == ''){
			alert('name should not be empty!');
			return;
		}else if(value.email ==''){
			alert('email should not be empty!');
			return;
		}

		post('profile_receive.php', value);

	}
	
</script>

</body></html>