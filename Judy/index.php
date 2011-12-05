<? 

require_once("includes/common.php"); 

?> 


<!DOCTYPE html>
<html>	
	<head>
		<title>Harvard-Radcliffe Asian American Christian Fellowship</title>
		<link rel="stylesheet" href="CSS/style2.css"> 
		<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
		<script src="scripts/jquery-1.2.1.min.js" type="text/javascript"></script>
		<script src="scripts/menu.js" type="text/javascript"></script>
		<script src="scripts/jquery.cookie.js" type="text/javascript"></script>
	</head> 
		<body> 
			
			<?php include_once("identify.php");?>
			<?php include_once("userspecificoptions.php");?>
			<div id="top"> 
				<?php include_once('includes/header.php');?>
				<!-- <?php include_once('includes/login.php');?>--> 
				<div id="middle">
				  Welcome<?  
				  $html = ", ".$user["name"];
				  if(($user["id"] != 0) & !empty($user["name"]))
				  echo $html 
				  ?>!
				</div> 
			</div> 
			
			<div id="center">
				<div id="left-side"> 
				   <?php include_once('includes/navbar.php');?> 
				</div> 
				
				<div id="right-side"> 
					<div class="content" id="home"> 
					<!-- <?php include('includes/pictureslider.php');?> --> 
					</div> 
				</div>
			</div>
				
			<div id="bottom"> 
			
				<?php include_once('includes/footer.php');?>
			</div> 
	   </body> 
</html>
			
	

    
	 
 