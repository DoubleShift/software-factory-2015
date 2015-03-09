<?php

/*
File: login.php
Description: Login page.
Author: Alexander Samodelkin
Version: 0.1
Created: 13.02.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

?>
<div class="wrapper">
	<div class="content ">
		<div id="login-image"></div>
		<div id="login-text"><?=PRESENT_YOUR_CARD?></div>


		<form action="dologin.php" class="center" method="post" onsubmit="return btn_onClick()">
		<input type="text" name="id" id="uid">

		<input type="submit" class="btn"> 
		</form>
	</div>
</div>




<script>
//	Todo: clean cookies before login.
//	clean all cookies, except language
	$().ready(function(){
	//	removeAllCookies();
	})

function btn_onClick(){
	var id=document.getElementById("uid").value;
	if(!id){
		alert(LAN.EMPTY);
		return false;
	}
	setCookie("userid", id);   
	return true;
}
</script>
</body></html>