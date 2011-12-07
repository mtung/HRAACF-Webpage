<?

  // require common code
  require_once("includes/common.php");
  require_once("identify.php");

  // if guest manages to get here, redirect them to homepage
  if($user["id"] == 0)
    redirect("index.php");

	// if these values check out, prepare values to insert into database...
  $name = mysql_real_escape_string($_POST["name"]);

  // ...then change the hashed value of password
  $id = $user["id"];
  $sql = "UPDATE users SET name = '$name' WHERE id ='$id'";
  $result = mysql_query($sql);

  // alert user if they cannot change passwords
  if($result == FALSE)
    apologize("Unable to change name");

  // redirect to home page
  redirect("changeaccount.php");

?>