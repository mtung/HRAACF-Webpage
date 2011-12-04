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
      <a href="index.php"><img alt="HRAACF Logo" height="110" src="images/logo.png"></a>
    </div>

    <div id="middle">
	  Welcome<?  
	  $html = ", ".$user["name"];
	  if(($user["id"] != 0) & !empty($user["name"]))
	  echo $html 
	  ?>!
    </div>

    <div id="bottom">     
	  <?include_once("userspecificoptions.php");?>
    </div>

  </body>

</html>
