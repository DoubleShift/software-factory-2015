
<?php

/*
File: challenge_add.php
Description: choose a friend to challenge.
Author: Chen Xin
Version: 0.1
Created: 22.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	$id = $_COOKIE['userid'];

?>


<div class="wrapper">
	<div class="content">
		<div class="heading">
			<h1>Search Friend!</h1>
		</div>
		<div class="body">
		
			<table width="100%">
					<tr>
					<td>
						<form action="" method="get">
						
							<input class="required" type="text" id="input_name" name='name' style='width:500px'/>
							</br>
    						<input class="btn" type="submit"  value="submit" />
						
						</form>
					</td>
					<td>
						<?php
						if($_GET){
							$name = $_GET['name'];
							// Connect to DB
							$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
								or die( "MySQL connection error: " . mysqli_connect_error() );
		
							$query = "SELECT * FROM user WHERE name = '$name'";
							$result = mysqli_query( $db, $query );
							
							if($result){
								echo "Click his name to challenge him!";
								while($row = mysqli_fetch_assoc($result)){
									echo "<td align='center'>
							<div class='name-item' onclick='onBtnClick();'>

								<img class='exercise-image' src='".IP_PICTURES."gravatar.jpg'/>
								<div class='exercise-description'>".$row['name']."</div>
								<input type='hidden' id ='cid' value='".$row['uid']."'/>
							</div>
						</td>";
								};	

								
							}else{
								echo 'Error';

							};

							
							
						 }
						?>
						
						


					</td>
					</tr>
					<tr>

					</tr>
				</table>
		</div>
	</div>
</div>
<script>
function onBtnClick(){
		var value = {};
		value.uid = <?php echo $id ?>; 
		//value.cid = $("input#cid").value; 
		value.cid = document.getElementById('cid').value;

		post('challenge_receive.php', value);
	}
</script>

</body></html>