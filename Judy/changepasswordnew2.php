<?

  // require common code
  require_once("includes/common.php");
  require_once("identify.php");

  // if guest manages to get here, redirect them to homepage
  if($user["id"] == 0)
    redirect("index.php");
  
  // check that old password is correct
  $id = $_SESSION["id"];  
  $sql = "SELECT * FROM users WHERE id = '$id'";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
  $old = crypt($_POST["old"], $row["hash"]);
  if($row["hash"] != $old)
	apologize("Old password incorrect!");
	
  // if these values check out, prepare values to insert into database...
  $hash = crypt($_POST["new"]);

  // ...then change the hashed value of password
  $sql = "UPDATE users SET hash = '$hash' WHERE id ='$id'";
  $result = mysql_query($sql);

  // alert user if they cannot change passwords
  if($result == FALSE)
    apologize("Unable to change password");

  // redirect to home page
  redirect("changeaccount.php");

?>