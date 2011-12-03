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
    <title>HRAACF Home</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="C$50 Finance" height="110" src="images/logo.png"></a>
    </div>

    <div id="middle">
	Welcome, <? echo $user["name"] ?>!
    </div>

    <div id="bottom">
      <a href="logout.php">log out</a>
	  |
	  <a href="changeaccount.php">change your account information</a>
    </div>

  </body>

</html>
