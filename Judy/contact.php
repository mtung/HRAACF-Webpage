<? 
  
  // common code
  require_once("includes/common.php");
  
  // find all ministries
  $sql = "SELECT * FROM users WHERE ministry != 0";
  $ministries = mysql_query($sql);

?> 

<!DOCTYPE html>
<html>	
	<head>
		<title>HRAACF: Contact Us</title>
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
				<div class="content" id="contact"> 
					<h1>Contact Us</h1>
					<? while($ministry = mysql_fetch_array($ministries)): ?>
					  <h2><? echo $ministry["name"] ?></h2>
					  <p><? echo $ministry["email"] ?><p>
					<? endwhile ?> 
				</div>
			</div>
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
   </body> 
</html>