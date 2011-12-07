<? 

require_once("includes/common.php"); 

?> 

<!DOCTYPE html>
<!--Home Page divided into three vertical divs wrapped in one large div; makes use of php includes to set up logo, navbar, usernavbar, footer, and identify the user for every page.--> 
<html>	
	<head>
		<title>Harvard-Radcliffe Asian American Christian Fellowship</title>
		<?php include_once("includes/header.php");?> 
	</head> 
	<body> 
		<?php include_once("identify.php");?> 
		<div id="wrapper">  
			<div id="left-side"> 
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			
			<div id="center"> 
			<div class="content" id="home"> 
				<center><h1>Welcome to the Harvard-Radcliffe Asian American Christian Fellowship's Website!</h1></center> 
			</div>
			</div> 
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
   </body> 
</html>
			
	

    
	 
 