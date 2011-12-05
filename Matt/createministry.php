<?

    // require common code
    require_once("includes/common.php"); 

	// identify user
	require_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Create Ministry</title>
    <script>
	function validate(f)
	{
	  if ((f.username.value == "")||(f.name.value == ""))
	  {
		alert("You must fill in all fields.");
		return false;
	  }
	  return true;
	}   
  </script>	
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="HRAACF Logo" height="110" src="images/logo.png"></a>
    </div>

    <div id="middle">
	  <form action="createministry2.php" method="post" onsubmit="return validate(this);">
	  <table cellpadding="5">
	    <tr>
		  <td>Ministry Username</td>
		  <td><input name="username" type="text"></td>
		</tr>
	    <tr>
		  <td>Ministry Name</td>
		  <td><input name="name" type="text"></td>
		</tr>
	  </table>
	  <br><br>
	  <input type="submit" value="Create Ministry!">
	  </form>
    </div>

    <div id="bottom">      
    </div>

  </body>

</html>
