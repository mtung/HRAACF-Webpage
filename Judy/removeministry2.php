<?

	// include common code
	include_once("includes/common.php");
	include_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
	// if no member was selected, return to remove members page
	if(empty($_POST))
	  redirect("removeministry.php");
	  
	// prepare data for actions
	$id = $_POST['id'];
	
	// find member
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$result = mysql_query($sql);
	if($result == FALSE)
	  apologize("Unable to locate member");
	$member = mysql_fetch_array($result);
	
	// obtain username
	$username = $member['username'];
	
	// remove from users table
	$sql = "DELETE FROM users WHERE id = '$id'";
	$result = mysql_query($sql);
	if($result==false)
	  apologize("Unable to remove ministry.");
	  
	// remove from pages table
	$sql = "DELETE FROM pages WHERE username = '$username'";
	$result = mysql_query($sql);
	if($result==false)
	  apologize("Unable to remove ministry.");

	// redirect user to remove members
	redirect("removeministry.php");

?>

