
<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>HRAACF: Sorry!</title>
  </head>

  <body>

    <div id="top">
	  <!-- We will need to change the CS50 image... -->
      <a href="index.php"><img alt="C$50 Finance" src="images/logo.png"></a>
    </div>

    <div id="middle">
      <h1>Sorry!</h1>
      <h2><?= $message ?></h2>
    </div>

    <div id="bottom">
      <a href="javascript:history.go(-1);">Return to Previous Page</a>
    </div>

  </body>

</html>
