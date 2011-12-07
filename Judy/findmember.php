<?
	// include common code
	require_once("includes/common.php");
	
	// process incoming data
	$username = mysql_real_escape_string($_GET["username"]);
	
	// prepare SQL query
	$sql = "SELECT * FROM users WHERE approved = 1 AND username = '$username' AND ministry = 0";
	$result = mysql_query($sql);
		
	// prepare html to return	
	$member = mysql_fetch_array($result);

	// only return values if user found
	if(!empty($member)):
?>

<td align=left><?echo $member['username']?></td>
<td align=left><?echo $member['name']?></td>
<td align=left><?echo $member['email']?></td>
<td><input name="id" type="checkbox" value="<?echo $member['id']?>"></td>

<?

	endif;
	if(empty($member))
	  print("<td colspan=4>Couldn't find member!</td>");
	  
?>