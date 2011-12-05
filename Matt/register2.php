<?

  // require common code
  require_once("includes/common.php");

  // check that exec has an email set to receive notification
  $sql = "SELECT * FROM users WHERE username = 'Exec'";
  $result = mysql_query($sql);
  if($result == FALSE)
    apologize("Sorry! New members cannot be accepted at this time! Please try again later!");
  $exec = mysql_fetch_array($result);
  if(empty($exec["email"]))
    apologize("Sorry! New members cannot be accepted at this time! Please try again later!");
  
  // prepare values to insert into database...
  $username = mysql_real_escape_string($_POST["username"]);
  $hash = crypt($_POST["password"]);
  $name = mysql_real_escape_string($_POST["name"]);
  $email = mysql_real_escape_string($_POST["email"]);

  // ...then insert user and obtain id
  $sql = "INSERT INTO users(username, hash, exec, ministry, name, email, approved) 
		 VALUES('$username', '$hash', 0, 0, '$name', '$email', 0)";
  $result = mysql_query($sql);

  // alert user if they cannot register
  if($result == FALSE)
    apologize("Unable to create user");

  // email exec to notify them that a new user requires registration
  $subject = "New member for HRAACF Webpage requires review!";
  $body = "Please login as Exec Team to the HRAACF webpage to review and approve this new member!";
  $header = "From: HRAACF Web Server\r\n";
  mail($exec["email"], $subject, $body, $header);
  
  // grab id of the new user
  $id = mysql_insert_id();

  // login new user
  $_SESSION["id"] = $id;

  // inform user that their registration is being reviewed
  redirect("beingreviewed.php");



?>