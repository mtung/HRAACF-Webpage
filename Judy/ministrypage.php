<?

	// include common code
	require_once("includes/common.php");

	// this webpage is always passed the username of the ministry
	$ministry = $_GET["id"];
	
	// use SQL query to pull the HTML from the 'pages' table
	$sql = "SELECT * FROM pages WHERE username = '$ministry'";
	$result = mysql_query($sql);
	if($result==FALSE)
	  apologize("Page currently unavailable!");
	$row = mysql_fetch_array($result);

?>

<!DOCTYPE html>
<html>	
	<head>
		<title>Harvard-Radcliffe Asian American Christian Fellowship</title>
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
				<div class="content" id="ministrypage"> 
					<? echo $row["webpage"] ?>
				</div>
			</div> 
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
   </body> 
</html>