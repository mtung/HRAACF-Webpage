<?

  // require common code
  require_once("includes/common.php");

?>

<!DOCTYPE html>
<html>
<!--sets up registration form for new users, which submits to PHP form that inserts new users into SQL database--> 
	<head>
		<title>HRAACF: Register</title>
		<?php include_once("includes/header.php");?> 
		
		<!--ensures that user has typed valid input --> 
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
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			<div id="center"> 
				<div class="useroptions" id="register"> 
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