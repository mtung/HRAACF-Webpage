<?
	
    // require common code
    require_once("includes/common.php"); 

	// identify user
	require_once("identify.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Change Account Info</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="HRAACF Logo" height="110" src="images/logo.png"></a>
    </div>

    <div id="middle">
    </div>

    <div id="bottom">
	  <table>
	    <tr>
		  <td><a href="changepasswordnew.php">Change Password</a></td>
		</tr>
		<tr>
		  <td><a href="changename.php">Set Name</a></td>
	      <td><? echo($user["name"]) ?></td>
		</tr>
		<tr>
		  <td><a href="changeemail.php">Set Email</a></td>
	      <td><? echo($user["email"]) ?></td>
		</tr>
	  </table>
    </div>

  </body>

</html>