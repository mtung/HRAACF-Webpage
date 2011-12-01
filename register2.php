<?

  // require common code
  require_once("includes/common.php");

  // check that all fields have been filled
  if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["password2"]))
    apologize("Please fill in all fields!");

  // check that the two passwords match
  if($_POST["password"] != $_POST["password2"])
    apologize("Passwords do not match!");

  // if these values check out, prepare values to insert into database...
  $username = mysql_real_escape_string($_POST["username"]);
  $hash = crypt($_POST["password"]);

  // ...then insert user and obtain id
  $sql = "INSERT INTO users(username, hash) VALUES(".$username.", ".$hash")";
  $result = mysql_query($sql);

  // alert user if they cannot register
  if($result == FALSE)
    apologize("Unable to create user");

  // grab id of the new user
  $id = mysql_insert_id();

  // login new user
  $_SESSION["id"] = $id;

  // redirect to portfolio
  redirect("index.php");



?>