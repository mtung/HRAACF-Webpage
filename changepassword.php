<?

    // require common code
    require_once("includes/common.php");

  ?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Change Password</title>
  </head>

  <body>
  
    <div id="top">
      <a href="index.php"><img alt="HRAACF" src="images/logo.png"></a>
    </div>

    <div id="middle">
      <form action="changepassword2.php" method="post">
        <table>
          <tr>
            <td>Old Password:</td>
            <td><input name="old" type="password"></td>
          </tr>
          <tr>
            <td>New Password:</td>
            <td><input name="new" type="password"></td>
          </tr>
          <tr>
            <td>Re-type Password:</td>
            <td><input name="new2" type="password"></td>
          </tr>
		  <tr>
            <td colspan="2"><input type="submit" value="Change Password"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
      or <a href="index.php">go back</a>
    </div>

  </body>

</html>
