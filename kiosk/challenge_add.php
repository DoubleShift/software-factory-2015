
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
						<form action="" method="get">
						<td>
							<input class="required" type="text" id="input_name" name='name' style='width:500px'/>

						</td>
						<td>
    						<input class="btn" type="submit"  value="submit" />
						</td>
						</form>

					</tr>
					<tr style="float: left">
						<?php
						if($_GET){
							$name = $_GET['name'];
							// Connect to DB
							$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
								or die( "MySQL connection error: " . mysqli_connect_error() );
		
							$query = "SELECT * FROM user WHERE name = '$name'";
							$result = mysqli_query( $db, $query );
							
							if($result){
								while($row = mysqli_fetch_assoc($result)){
									echo "<td align='center'>
							<div class='name-item' onclick=''>
								<img class='exercise-image' src='".IP_PICTURES."gravatar.jpg'/>
								<div class='exercise-description'>".$name."</div>
							</div>
						</td>";
								};	

								
							}else{
								echo 'Error';

							};

							
							
						 }
						?>
						
						


					</tr>
				</table>
		</div>
	</div>
</div>
<script>

</script>

</body></html>