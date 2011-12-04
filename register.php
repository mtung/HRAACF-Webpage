<?

  // require common code
  require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

<head>
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <title>HRAACF Registration</title>
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
  <div id="top">
    <a href="index.php"><img alt="C$50 Finance" src="images/logo.png"></a>
  </div>
  <div id="middle">
    <form action="register2.php" method="post" onsubmit="return validate(this);">
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
		  <td colspan="2"><input type="submit" value="Register!"></td>
		</tr>
	  </table>
	</form>
  </div>
  <div id="bottom">
	or <a href="login.php">login</a> if you already have an account
  </div>
</body>

</html>