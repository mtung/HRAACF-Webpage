<?
	
    // require common code
    require_once("includes/common.php"); 

	// identify user
	require_once("identify.php");
	
	// if user is a guest redirect to index
	if($user["id"] == 0)
		apologize("Sorry! Only members can change their information!");

?>
	
<!DOCTYPE html>
<html>	
	<head>
		<title>HRAACF: Change Account</title>
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
			<div id="wrapper">  
			
				<div id="left-side"> 
				   <div id="logo">  
 						<a href="index.php"><img src="images/AACFLogo.png" width="300"/></a> 
				   </div> 
				   <?php include_once('includes/navbar.php');?> 
				   <?php include_once('includes/footer.php');?>
				</div> 
				
				<div id="center"> 
					<div class="useroptions" id="changeaccount"> 
						<h1>Change Account</h1> 
						<table>
						<tr>
						  <td><a href="changepasswordnew.php">Change Password</a></td>
						</tr>
						<tr>
						  <td><a href="changename.php">Change Name</a></td>
						  <td><? echo($user["name"]) ?></td>
						</tr>
						<tr>
						  <td><a href="changeemail.php">Change Email</a></td>
						  <td><? echo($user["email"]) ?></td>
						</tr>
					  </table>
					</div>
				</div> 
				
				<div id="right-side"> 
					<?php include_once('includes/usernav.php');?> 
				</div>
			</div> 
	   </body> 
</html>
  
	
	
	
