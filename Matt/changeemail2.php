<?

  // require common code
  require_once("includes/common.php");
  require_once("identify.php");
	
  // if guest manages to get here, redirect them to homepage
  if($user["id"] == 0)
    redirect("index.php");
  
  // if these values check out, prepare values to insert into database...
  $email = mysql_real_escape_string($_POST["email"]);

  // ...then change the email
  $id = $user["id"];
  $sql = "UPDATE users SET email = '$email' WHERE id ='$id'";
  $result = mysql_query($sql);

  // alert user if they cannot change email
  if($result == FALSE)
    apologize("Unable to change email");

  // redirect to home page
  redirect("changeaccount.php");



?>