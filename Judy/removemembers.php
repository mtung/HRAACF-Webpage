<?

    // require common code
    require_once("includes/common.php"); 

	// identify user
	require_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
	// find all unapproved members
	$sql = "SELECT * FROM users WHERE approved = 1 AND id != 0";
	$result = mysql_query($sql);

	
?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Remove Member</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="HRAACF Logo" height="110" src="images/logo.png"></a>
    </div>

    <div id="middle">
	  <form action="approvemembers2.php" method="post">
	  <table cellpadding="5">
	    <tr>
		  <td align=left>Name</td>
		  <td align=left>Email</td>
		  <td align=left>Approve</td>
		</tr>
		<? while($unapproved = mysql_fetch_array($result)):?>
		<tr>
		  <td align=left><? echo $unapproved["name"] ?></td>
		  <td align=left><? echo $unapproved["email"] ?></td>
		  <td> <input name="<?echo $unapproved["id"]?>" type="checkbox"></td>
		</tr>
		<? endwhile; ?>
	  </table>
	  <br><br>
	  <input type="submit" value="Approve!">
	  </form>
    </div>

    <div id="bottom">      
    </div>

  </body>

</html>
