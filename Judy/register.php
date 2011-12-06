<?

  // require common code
  require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

<head>
	<title>HRAACF: Register</title>
	<link rel="stylesheet" href="CSS/style2.css"> 
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<script src="scripts/jquery-1.2.1.min.js" type="text/javascript"></script>
	<script src="scripts/menu.js" type="text/javascript"></script>
	<script src="scripts/jquery.cookie.js" type="text/javascript"></script>
	
	<script>
	function validate(f)
	{
	  if ((f.username.value == "")||(f.name.value == "")||(f.email.value == "")||
		  (f.password.value == "")||(f.password2.value==""))
	  {
		alert("You must fill in all fields.");
		return false;
	  }
	  else if (f.password.value != f.password2.value)
	  {
		alert("Passwords do not match.");
		return false;
	  }
	  return true;
	}   
	</script> 
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
				<div class="useroptions" id="home"> 
				    <h1>Register</h1> 
					<form action="register2.php" method="post" onsubmit="return validate(this);">
					  <center> 
					  <table>
						<tr>
						  <td>Username:</td>
						  <td><input name="username" type="text"></td>
						</tr>
						<tr>
						  <td>Full Name:</td>
						  <td><input name="name" type="text"></td>
						</tr><tr>
						  <td>Email:</td>
						  <td><input name="email" type="text"></td>
						</tr>
						<tr>
						  <td>Password:</td>
						  <td><input name="password" type="password"></td>
						</tr>
						<tr>
						  <td>Re-type Password:</td>
						  <td><input name="password2" type="password"></td>
						</tr>
						<tr>
						  <td colspan="2" align="center"><input type="submit" value="Register!"></td>
						</tr> 
					  </table>
					  </center> 
					</form>
					<p><a href="login.php">login</a> if you already have an account</p>
				</div> 
			</div> 

		<div id="right-side"> 
			<?php include_once('includes/usernav.php');?> 
		</div>
	 </div> 
   </body> 
</html>