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
	  Welcome<?  
	  $html = ", ".$user["name"];
	  if(($user["id"] != 0) & !empty($user["name"]))
	  echo $html 
	  ?>!
    </div>

    <div id="bottom">     
	  <?  
		  $html1 = "<a href='logout.php'>log out</a>";
	      $html2 = "<a href='login.php'>log in</a>";
		  $html3 = " | <a href='changeaccount.php'>change your account information</a>";
		  if($user["id"] != 0)
		  {
		    print($html1);
			print($html3);
		  }
		  else
		    print($html2);
	  ?>
    </div>

  </body>

</html>
