<?

	include_once("common.php");
	
	// Use an SQL query to look for all ministry values, then add them to dropdown list
	
	// SQL Query
	$sql = "SELECT * FROM users WHERE ministry != 0 and ministry != 1";
	$result = mysql_query($sql);
	
	// Loop through ministries, printing HTML for the navbar
	while($current = mysql_fetch_array($result)):
?>

<!--Links created for each ministry page, print relevant HTMl for navbar--> 
<li><a href="ministrypage.php?id=<?echo $current["username"]?>"><?echo $current["name"]?></a></li>
<? endwhile ?>