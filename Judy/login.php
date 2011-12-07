<?

    // require common code
    require_once("includes/common.php");
	
	// identify user
	require_once("identify.php");
	
	// if another user signed in, apologize
	if($user["id"] != 0)
		apologize("Please sign out the current user first!");
		
  ?>

<!DOCTYPE html>
<html>	
<!--sets up login form for users-->
	<head>
		<title>HRAACF: Log In</title>
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
				<div class="useroptions" id="login"> 
					<h1>Log In</h1> 
					<form action="login2.php" method="post">
						<center> 
						<table>
						  <tr>
							<td>Username:</td>
							<td><input name="username" type="text"></td>
						  </tr>
						  <tr>
							<td>Password:</td>
							<td><input name="password" type="password"></td>
						  </tr>
						  <tr>
							<td colspan="2" align="center"><input type="submit" value="Log In"></td>
						  </tr>
						</table>
						</center> 
      				</form>
				</div>
				</div> 
				<div id="right-side"> 
					<?php include_once('includes/usernav.php');?> 
				</div>
			</div> 
	   </body> 
</html>
  