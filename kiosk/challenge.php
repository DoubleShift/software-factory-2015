<?php

/*
File: challenge.php
Description: have a challenge with your friends.
Author: Chen Xin
Version: 0.1
Created: 20.03.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	$id = $_GET['id'];
	// Connect to DB
	$db = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB )
		or die( "MySQL connection error: " . mysqli_connect_error() );
		
	$query = "SELECT * FROM user WHERE id = $id";
	$result = mysqli_query( $db, $query );
	
	$name = $cname = $totalminus = '';
	if($row = mysqli_fetch_assoc($result))
	{
		setcookie('username',$row['name']);
		$name = $row['name'];
		//search challenge record
		$query = "SELECT * FROM challenge WHERE uid = $id";
		$result = mysqli_query($db,$query);
		if($row = mysqli_fetch_assoc($result)){
			$totalminus = $row['total'];
			$cid = $row['cid'];

			//search competitor's name
			$query = "SELECT * FROM user WHERE id = $cid";
			$result = mysqli_query( $db, $query );
			$row = mysqli_fetch_assoc($result);
			$cname = $row['name'];
		}else{
			// no record, add one
		}
	}else {
		//what if get nothing?
	}
// you could use: $id $name $totalminus $cid $cname


?>


<div class="wrapper">
	<div class="content register-name">
		<div class="heading">
			<h1>Challenge your friends!</h1>
		</div>
		<div class="body">
		
			<div >
				<table width="100%">
					<tr>
						<td colspan="2" height="30">&nbsp;</td>
					</tr>
					<tr>
						<td  >
						<div style="position:relative; width: 300px; height: 300px" >
							<h1 style="position:absolute; left:100px; top:0px; width:200px"><?php echo $name ?></h1>
							<div id='indicatorContainer1'  style="position:absolute; left:60px; top:50px">	</div>
							<img src="<?=IP_PICTURES?>gravatar2.png" style="position:absolute; left:75px; top:65px"/>
						</div>
							
						</td>

						<td >
						<div style="position:relative; width: 200px; height: 300px">
							<img src="<?=IP_PICTURES?>vs.jpg" style="position:absolute; top:50px; left:45px; height: 200px; width: 150px"/>
						</div>
						</td>

						<td >
							<div style="position:relative; width: 300px; height: 300px" >
								<h1 style="position:absolute; left:100px; top:0px"><?php if($cname){ echo $cname;}else{ echo 'Click Me!';}?></h1>
								<div id='indicatorContainer2'  style="position:absolute; left:60px; top:50px">	</div>
								<img src="<?php 
												if($totalminus){
													echo IP_PICTURES.'gravatar2.png' ;
												}else{
													echo IP_PICTURES.'add.png' ;
												}

								?>" style="position:absolute; left:75px; top:65px; width;200px; height:200px" onclick="onBtnClick()"/>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" height="50">&nbsp;</td>
					</tr>
					<tr>
						<td>
							<button class="btn prev" onclick="javascript:history.go(-1);">Back</button>
						</td>
						<td></td>
						<td align="right">
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="keyboard"></div>
</div>


<?php 
	function getColor($percent){
		if($percent > 50){
			$color = '#FF0000';
		}else{
			$color = '#87CEEB';
		}
		return $color;
	}
	
?>

<script>
	function onBtnClick(){
		var uid = $.cookie('userid');
		window.location ='challenge_add.php?id='+uid;	
	}


  $('#indicatorContainer1').radialIndicator({
        barColor: '<?php echo getColor(40);?>',
        radius: 105,
        barWidth: 10,
        initValue: 40,
        roundCorner : true,
        percentage: true
    });
  //don't have a competitor, hide it
<?php
	if($totalminus){
	echo "$('#indicatorContainer2').radialIndicator({
        barColor: '#87CEEB',
        radius: 105,
        barWidth: 10,
        initValue: 70,
        roundCorner : true,
        percentage: true
    });";
	}
 ?>
   
</script>


</body></html>