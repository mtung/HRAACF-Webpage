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
    <title>Change Name</title>
    <script>
		function validate(f)
		{
		  if (f.email.value == "")
		  {
			alert("You must input an email.");
			return false;
		  }
		  return true;
		}   
    </script>
	</head>

  <body>
  
    <div id="top">
      <a href="index.php"><img alt="HRAACF" src="images/logo.png"></a>
    </div>

    <div id="middle">
      <form action="changeemail2.php" method="post" onsubmit="return validate(this);">
        <table>
          <tr>
            <td>Email:</td>
            <td><input name="email" type="text"></td>
          </tr>
		  <tr>
            <td colspan="2"><input type="submit" value="Change Email"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
      or <a href="changeaccount.php">go back</a>
    </div>

  </body>

</html>
