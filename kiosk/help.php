<?php

/*
File: help.php
Description: Help page.
Author: Deng Canrong
Version: 0.1
Created: 15.02.2015
*/

	// Include header
	include( dirname(__FILE__) . '/header.php' );

	/* PAGE CODE STARTS AFTER THIS SECTION */ 
?>
<script>
/* waiting to write*/
function btn_next_onclick(){

	/*var user_problem=document.getElementById("input_problem").value;
	setCookie("userproblem", user_problem);   
	location.href='yini_register_email.php';*/

	
}

</script>

<div class="wrapper">
	<div class="content register-name">
<div id = "help-body">


	<div class="heading">
			<h1>Help<h1>
		</div>

	<div class="body" >
	
	<h2> Select the topic you need help from </h2>
	
	<table  width="100%" cellpadding="5px" cellspacing="20px">
	<tr>
    <td colspan="2" height="80"  >
	<a href="#" class="help_option">
        How to use our system
	</a> 
	</td>
    
	</tr>
	<tr height="30">
	</tr>
	<tr>
    <td colspan="2" height="80"  >
	<a href="#" class="help_option" >
       What is the standard of star level evaluation	</a>	</td>
    
	</tr>
	<tr height="30">
	</tr>
	<tr>
	<td colspan="2" height="80">
	<a href="#" class="help_option" >
        How can I get contacted with my Facebook Account	</a>	</td>
	</tr>
	<tr height="20">
	</tr>
	<tr>
						<td>
							<button class="btn prev" onclick="JavaScript:history.go(-1);">Back</button>
						</td>
						<td align="right">
							<button class="btn next" onclick="btn_next_onclick()">Next</button>
						</td>
					</tr>
	</table>
	
   </div>
   </div>    
    </div>






   



</div>

</div>
</div>





<?php /* CLOSE THIS TAGS THAT WERE OPENED IN HEADER */ ?>

</body></html>