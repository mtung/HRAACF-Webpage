<?

    // require common code
    require_once("includes/common.php"); 

	// identify user
	require_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
	// find all unapproved members
	$sql = "SELECT * FROM users WHERE approved = 1 AND id != 0";
	$result = mysql_query($sql);

	
?>

<!DOCTYPE html>
<html>
  <head>
    <title>HRAACF: Remove Member</title>
    <?php include_once("includes/header.php");?> 
  </head>

	<body>
		<?php include_once("identify.php");?> 
		<div id="wrapper">  
			<div id="left-side">
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			<div id="center"> 
			<div class="useroptions" id="removemembers"> 
			  <form action="approvemembers2.php" method="post">
				  <table cellpadding="5">
					<tr>
					  <td align=left>Name</td>
					  <td align=left>Email</td>
					  <td align=left>Approve</td>
					</tr>
					<? while($unapproved = mysql_fetch_array($result)):?>
					<tr>
					  <td align=left><? echo $unapproved["name"] ?></td>
					  <td align=left><? echo $unapproved["email"] ?></td>
					  <td> <input name="<?echo $unapproved["id"]?>" type="checkbox"></td>
					</tr>
					<?endwhile;?>
				   </table>
				   <br><br>
				   <input type="submit" value="Approve!">
			  </form>
			</div>
    		</div>
    	</div> 	
	</body>
</html>
