<?

	// include common code
	include_once("includes/common.php");
	include_once("identify.php");
	
	// if user is not ministry, then redirect to homepage
	if($user["ministry"] == 0)
	  redirect("index.php");
	
	// if no code was written, then return ministry to edit page
	if(empty($_POST["webpage"]))
	  redirect("editministrypage.php?id=".$user['id']);
	
	// prepare values for input
	$username = mysql_real_escape_string($user["username"]);
	$webpage = mysql_real_escape_string($_POST["webpage"]);
	
	// update database
	$sql = "UPDATE pages SET webpage = '$webpage' WHERE username = '$username'";
	$result = mysql_query($sql);
	
	// if query fails, apologize
	if($result == FALSE)
	  apologize("Unable to update webpage"); 

	// redirect user to their page to view results
	redirect("ministrypage.php?id=".$user['username']);

?>

