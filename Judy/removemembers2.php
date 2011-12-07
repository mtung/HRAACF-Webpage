<?

	// include common code
	include_once("includes/common.php");
	include_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
	// if no member was selected, return to remove members page
	if(empty($_POST))
	  redirect("removemembers.php");
	  
	// prepare data for actions
	$id = $_POST['id'];
	
	// find members
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$result = mysql_query($sql);
	if($result == FALSE)
	  apologize("Unable to locate member");
	$member = mysql_fetch_array($result);
	
	// remove member
	$sql = "DELETE FROM users WHERE id = '$id'";
	$result = mysql_query($sql);
	if($result==false)
	  apologize("Unable to remove user.");
		
	// email removed member
	$to = $member["email"];
	$subject = "Removal from HRAACF Webpage";
	$message = "Exec has removed your account from HRAACF's webpage. If you have questions, email ".$user['email'];
	mail($to,$subject,$message);

	// redirect user to remove members
	redirect("removemembers.php");

?>

