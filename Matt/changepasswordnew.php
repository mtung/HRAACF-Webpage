<?

    // require common code
    require_once("includes/common.php");

  ?>

<!DOCTYPE html>

<html>

  <head>
    <script>
		function validate(f)
		{
		  if (f.old.value == "")
		  {
			alert("You must input old password.");
			return false;
		  }
		  else if (f.new.value == "")
		  {
			alert("You must provide a new password.");
			return false;
		  }
		  else if (f.old.value == f.new.value)
		  {
		    alert("Your new password must be different from your old password.");
			return false;
		  }
		  else if (f.new.value != f.new2.value)
		  {
			alert("You must provide the same password twice.");
			return false;
		  }
		  return true;
		}   
    </script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Change Password</title>
  </head>

  <body>
  
    <div id="top">
      <a href="index.php"><img alt="HRAACF" src="images/logo.png"></a>
    </div>

    <div id="middle">
      <form action="changepasswordnew2.php" method="post"  onsubmit="return validate(this);">
        Old Password: <input name="old" type="password">
        <br>
		New Password: <input name="new" type="password">
		<br>
		Re-type Password: <input name="new2" type="password">
		<br><br>
		<input type="submit" value="Change Password">
      </form>
    </div>

    <div id="bottom">
      or <a href="changeaccount.php">go back</a>
    </div>

  </body>

</html>
