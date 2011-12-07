<?

    // require common code
    require_once("includes/common.php"); 

	// identify user
	require_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
	// find all unapproved members
	$sql = "SELECT * FROM users WHERE approved = 0 AND id != 0";
	$unapproved = mysql_query($sql);

?>

<!DOCTYPE html>

<html>
	 <head>
   		<title>HRAACF: Approve Members</title>
		<?php include_once("includes/header.php");?> 
	</head>
	<body> 
		<div id="wrapper">  
		
			<div id="left-side"> 
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			
			<div id="center"> 
				<div class="useroptions" id="approvemembers"> 
				  <form action="removemembers2.php" method="post">
					  <table cellpadding="8">
						<tr>
						  <th align=left>Username</th>
						  <th align=left>Name</th>
						  <th align=left>Email</th>
						  <th align=left>Approve?</th>
						</tr>
						<? while($member = mysql_fetch_array($unapproved)):?>
						<tr>
						  <td align=left><? echo $member["username"] ?></td>
						  <td align=left><? echo $member["name"] ?></td>
						  <td align=left><? echo $member["email"] ?></td>
						  <td> <input name="<?echo $member["id"]?>" type="checkbox"></td>
						</tr>
						<? endwhile; ?>
					  </table>
					  <br><br>
					  <input type="submit" value="Approve!">
				  </form>
				</div>
			</div>
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
	</body> 
</html>
