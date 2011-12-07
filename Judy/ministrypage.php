<?

	// include common code
	require_once("includes/common.php");

	// this webpage is always passed the username of the ministry
	$username = $_GET["id"];
	
	// use SQL query to pull the HTML from the 'pages' table
	$sql = "SELECT * FROM pages WHERE username = '$username'";
	$result = mysql_query($sql);
	if($result==FALSE)
	  apologize("Page currently unavailable!");
	$row = mysql_fetch_array($result);

?>

<!DOCTYPE html>
<!--generates ministry pages, passed a value of username to look up HTML in "pages" SQL table--> 
<html>	
	<head>
		<title>HRAACF: Ministry Pages</title>
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