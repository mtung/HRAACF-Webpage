<?

	// include common code
	include_once("includes/common.php");
	include_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
	// find highest ministry number
	$sql = "SELECT MAX(ministry) FROM users";
	$result = mysql_query($sql);
	$max = mysql_fetch_array($result);
	
	// if query fails, apologize
	if($result == FALSE)
	  apologize("Unable to locate ministries");
	
	// generate values for ministry creation
	$username = mysql_real_escape_string($_POST["username"]);
	$hash = crypt("HRAACF");
	$exec = 0;
	$ministry = $max['MAX(ministry)'] + 1;
	$name = mysql_real_escape_string($_POST["name"]);
	$email = "";
	$approved = 1;
	
	// create new ministry
	$sql = "INSERT INTO users(username, hash, exec, ministry, name, email, approved) 
			VALUES('$username', '$hash', '$exec', '$ministry',
			'$name', '$email', '$approved')";
	$result = mysql_query($sql);
	if($result==FALSE)
	  apologize("Unable to create ministry.");
		 
	// redirect exec to homepage
	redirect("index.php");

?>

