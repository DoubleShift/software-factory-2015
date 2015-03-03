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


?>
<!-- Script -->
<script type="text/javascript" scr="<?php echo IP_SCRIPTS ?>jquery.js"></script>
<script>
//取得cookie  
function getCookie(name) {  
 var nameEQ = name + "=";  
 var ca = document.cookie.split(';');    //把cookie分割成组  
 for(var i=0;i < ca.length;i++) {  
 var c = ca[i];                      //取得字符串  
 while (c.charAt(0)==' ') {          //判断一下字符串有没有前导空格  
 c = c.substring(1,c.length);      //有的话，从第二位开始取  
 }  
 if (c.indexOf(nameEQ) == 0) {       //如果含有我们要的name  
 return unescape(c.substring(nameEQ.length,c.length));    //解码并截取我们要值  
 }  
 }  
 return false;  
}  
  
//清除cookie  
function clearCookie(name) {  
 setCookie(name, "", -1);  
}  
  
//设置cookie  
function setCookie(name, value, seconds) {  
 seconds = seconds || 0;   //seconds有值就直接赋值，没有为0，这个根php不一样。  
 var expires = "";  
 if (seconds != 0 ) {      //设置cookie生存时间  
 var date = new Date();  
 date.setTime(date.getTime()+(seconds*1000));  
 expires = "; expires="+date.toGMTString();  
 }  
 document.cookie = name+"="+escape(value)+expires+"; path=/";   //转码并赋值  
}  
function btn_next_onclick(){
	var user_name=document.getElementById("input_name").value;
	$.setCookie("username", user_name);   
	location.href='register_gender.php';
}
</script>

<div id="welcome-picture"></div>


	<div class="main-box">
		<h1 class="title">Enter your name</h1>
		<hr align=left width=720 color=#000000 SIZE=3 noShade> 
		<h1 class="main-text">Please input your name:</h1>
		<input id="input_name" type="text">
		<button  class="button-back" onclick="btn_next_onclick()">Next</button>

	</div>

	<button class="button-back" onclick="javascript:history.go(-1);"><?=BACK?></button>



<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>
</body></html>