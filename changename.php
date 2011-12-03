<?

    // require common code
    require_once("includes/common.php");
	require_once("identify.php");

  ?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Change Name</title>
  </head>

  <body>
  
    <div id="top">
      <a href="index.php"><img alt="HRAACF" src="images/logo.png"></a>
    </div>

    <div id="middle">
      <form action="changename2.php" method="post">
        <table>
          <tr>
            <td>Full Name:</td>
            <td><input name="name" type="text"></td>
          </tr>
		  <tr>
            <td colspan="2"><input type="submit" value="Change Name"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
      or <a href="changeaccount.php">go back</a>
    </div>

  </body>

</html>
