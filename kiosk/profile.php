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
		print_r($row);
	}else {
		//what if get nothing?
	}
?>


<div class="wrapper">

	<div class="content ">
   		
	</div>
</div>

<script type="text/javascript">
// get data like this
	var user_info = '<?= $row['name'] ?>';
</script>


</body></html>