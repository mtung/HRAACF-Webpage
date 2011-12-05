<?

	// include common code
	include_once("includes/common.php");
	include_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
	// if no members were approved, return to approve members page
	if(empty($_POST))
	  redirect("approvemembers.php");
	
	// find all unapproved members
	$sql = "SELECT * FROM users WHERE approved = 0 AND id != 0";
	$result = mysql_query($sql);
	
	// if query fails, apologize
	if($result == FALSE)
	  apologize("Unable to locate unapproved members");
	
	// loop through members and approve them if they are in $_POST
	while($unapproved = mysql_fetch_array($result))
	{
	  $id = $unapproved["id"];
	  if($_POST[$id])
	  {
	    $sql2 = "UPDATE users SET approved = 1 WHERE id = '$id'";
		$result2 = mysql_query($sql2);
		if($result2 == FALSE)
		  apologize("Unable to approve user".$unapproved["name"]);
	  }
	}

	// redirect user to unapproved members page to view results
	redirect("approvemembers.php");

?>

