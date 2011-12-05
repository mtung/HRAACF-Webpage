<?

	// identify signed in user...
	$sql = "SELECT * FROM users WHERE id =".$_SESSION['id'];
	$result = mysql_query($sql);
	if($result == TRUE)
	{
		$user = mysql_fetch_array($result);
	}
	
	// ... or treat as a guest
	else
	{
		$sql = "SELECT * FROM users WHERE id = 0";
		$result = mysql_query($sql);
		$user = mysql_fetch_array($result);
	}

?>