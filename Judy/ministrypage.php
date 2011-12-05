<?

	// include common code
	require_once("includes/common.php");

	// this webpage is always passed the username of the ministry
	$ministry = $_GET["id"];
	
	// use SQL query to pull the HTML from the 'pages' table
	$sql = "SELECT * FROM pages WHERE username = '$ministry'";
	$result = mysql_query($sql);
	if($result==FALSE)
	  apologize("Page currently unavailable!");
	$row = mysql_fetch_array($result);
	
	// spit out the HTML
	echo $row["webpage"];
	
?>