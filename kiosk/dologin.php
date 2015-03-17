<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	// Include top level header
	define( 'P_ROOT', dirname(dirname(__FILE__)) . '/' );
	include( P_ROOT . 'header.php' );
	
	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	$query = "SELECT * FROM user WHERE uid = ".$_POST['id'];
	$result = mysqli_query( $db, $query );
	
	if($row = mysqli_fetch_assoc($result))
	{
		setcookie("userid", $_POST['id']);
		setcookie("username",$row['name']);	//get user name, for the welcome page

		$query = "SELECT * FROM exercise_plan WHERE user_id = ".$_POST['id'];
		$result = mysqli_query( $db, $query );
		if(mysqli_num_rows($result)<1)
		{
			//don't have exercise plan
			$page = "exercise-type.php?id=".$_POST['id'];
		}
		else
		{
			// 
			$page = "exercise-plan.php?id=".$_POST['id'];
		}
	}
	else   // new user
	{
		if($_POST['id']<0)   // card read error
		{
			$page = "error.php";
		}
		else 		//regist
		{
			$page = "register_name.php";
		}
	}
?>
<html>
<head>
	<meta http-equiv="refresh" content="0; url=<?php echo IP_ROOT?>kiosk/<?php echo $page;?>" />
</head>
<body>
Processing...
</body>
</html>