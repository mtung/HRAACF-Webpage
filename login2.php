<?

    // require common code
    require_once("includes/common.php"); 

    // escape username to avoid SQL injection attacks
    $username = mysql_real_escape_string($_POST["username"]);

    // prepare SQL
    $sql = "SELECT * FROM users WHERE username='$username'";

    // execute query
    $result = mysql_query($sql);

    // if we found user, check password
    if (mysql_num_rows($result) == 1)
    {
        // grab row
        $row = mysql_fetch_array($result);

        // compare hash of user's input against hash that's in database
        if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
        {
            // remember that user's now logged in by caching user's ID in session
            $_SESSION["id"] = $row["id"];

            // redirect to portfolio
            redirect("index.php");
        }
    }

    // else report error
    apologize("Invalid username and/or password!");

?>
