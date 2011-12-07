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
<!-- directs user to forms where they can change password, name, and email--> 
	<head>
		<title>HRAACF: Change Account</title>
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
					<div class="useroptions" id="changeaccount"> 
						<h1>Change Account</h1> 
						<center> 
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
					  </center> 
					</div>
				</div> 
				<div id="right-side"> 
					<?php include_once('includes/usernav.php');?> 
				</div>
			</div> 
	   </body> 
</html>
  
	
	
	
