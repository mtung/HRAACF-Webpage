<?

  // require common code
  require_once("includes/common.php");

  // check that all fields have been filled
  if(empty($_POST["old"]) || empty($_POST["new"]) || empty($_POST["new2"]))
    apologize("Please fill in all fields!");
  
  // check that two passwords are different
  if($_POST["new"] == $_POST["old"])
	apologize("Old and new passwords match!");
  
  // check that the two passwords match
  if($_POST["new"] != $_POST["new2"])
    apologize("New passwords do not match!");

  // check that old password is correct
  $sql = "SELECT * FROM users WHERE users.id = ".$_SESSION["id"];
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
  $old = crypt($_POST["old"], $row["hash"]);
  if($row["hash"] != $old)
	apologize("Old password incorrect!");
	
  // if these values check out, prepare values to insert into database...
  $hash = crypt($_POST["new"]);

  // ...then change the hashed value of password
  $id = $_SESSION["id"];
  $sql = "UPDATE users SET hash = '$hash' WHERE id ='$id'";
  $result = mysql_query($sql);

  // alert user if they cannot change passwords
  if($result == FALSE)
    apologize("Unable to change password");

  // redirect to home page
  redirect("changeaccount.php");



?>