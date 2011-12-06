<?

    // require common code
    require_once("includes/common.php"); 

?>

<!DOCTYPE html>

<html>
	<head>
		<title>HRAACF: Under Review</title>
		<?php include_once("includes/header.php");?>
	</head>

	<body>
		<?php include_once("identify.php");?> 
		<div id="wrapper">  
			<div id="left-side"> 
			   <div id="logo">  
					<a href="index.php"><img src="images/AACFLogo.png" width="300"/></a> 
			   </div> 
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			
			<div id="center"> 
			<div class="useroptions" id="review"> 
				<h2>Thank you for registering! Your application has been sent to HRAACF Exec for review.</h2>
				<br> 
				<a href="index.php">Return to HRAACF Home</a>
			</div>
			</div> 
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
	</body>
</html>
