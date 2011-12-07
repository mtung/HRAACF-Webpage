<!DOCTYPE html>
<!-- Apology message for errors, $message in helpers.php (adapted from Pset7)--> 
<html>	
	<head>
		<title>HRAACF: Sorry!</title>
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
			<div class="useroptions" id="apology"> 
				<h1>Sorry!</h1>
				<h2><?= $message ?></h2>
				<br> 
				<a href="javascript:history.go(-1);">Return to Previous Page</a>
			</div>
			</div> 
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
   </body> 
</html>
		