<?

  // require common code
  require_once("includes/common.php");
  require_once("identify.php");

  // check that all fields have been filled
  if(empty($_POST["email"]))
    apologize("Please fill in all fields!");

	
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
  redirect("index.php");



?>