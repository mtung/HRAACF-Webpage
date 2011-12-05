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

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>HRAACF Log In</title>
  </head>

  <body>
  
    <div id="top">
      <a href="index.php"><img alt="HRAACF" src="images/logo.png"></a>
    </div>

    <div id="middle">
      <form action="login2.php" method="post">
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
            <td colspan="2"><input type="submit" value="Log In"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
      or <a href="register.php">register</a> for an account
    </div>

  </body>

</html>