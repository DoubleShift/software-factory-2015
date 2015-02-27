<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	// Include top level header
	define( 'P_ROOT', dirname(dirname(__FILE__)) . '/' );
	include( P_ROOT . 'header.php' );
	
	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	$query = "SELECT * FROM users WHERE id = ".$_POST['id'];
	$result = mysqli_query( $db, $query );
	
	if($row = mysqli_fetch_assoc($result))
	{
		setcookie("user-id", $_POST['id'], time()+3600);
	
		$query = "SELECT * FROM exercise_plan WHERE user_id = ".$_POST['id'];
		$result = mysqli_query( $db, $query );
		if($row = mysqli_fetch_assoc($result))
		{
			$page = "exercise-plan.php";
		}
		else
		{
			$page = "welcome.php";
		}
	}
	else
	{
		if($_POST['id']<0)
		{
			$page = "error.php";
		}
		else
		{
			$page = "register.php";
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