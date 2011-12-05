<?

	include_once("common.php");
	
	// Use an SQL query to look for all ministry values, then add them to dropdown list
	
	// SQL Query
	$sql = "SELECT * FROM users WHERE ministry != 0";
	$result = mysql_query($sql);
	
	// Loop through ministires, printing HTML for the navbar
	while($current = mysql_fetch_array($result)):
?>
<li><a href="ministrypage.php"><?echo $current["name"]?></a></li>
<? endwhile ?>