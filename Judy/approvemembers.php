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
	$result = mysql_query($sql);

	
?>

<!DOCTYPE html>

<html>
	 <head>
   		<title>HRAACF: Approve Members</title>
		<link rel="stylesheet" href="CSS/style2.css"> 
		<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
		<script src="scripts/jquery-1.2.1.min.js" type="text/javascript"></script>
		<script src="scripts/menu.js" type="text/javascript"></script>
		<script src="scripts/jquery.cookie.js" type="text/javascript"></script>
	</head>
	<body> 
	<?php include_once("identify.php");?> 
		<div id="wrapper">  
		
			<div id="left-side"> 
			   <div id="logo">  
					<a href="index.php"><img src="images/AACFLogo.png" width="300"/></a> 
			   </div> 
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			
			<div id="center"> 
			<div class="useroptions" id="login"> 
			  <form action="approvemembers2.php" method="post">
			  <table cellpadding="8">
				<tr>
				  <th align=left>Username</td>
				  <th align=left>Name</td>
				  <th align=left>Email</td>
				  <th align=left>Approve?</td>
				</tr>
				<? while($unapproved = mysql_fetch_array($result)):?>
				<tr>
				  <td align=left><? echo $unapproved["username"] ?></td>
				  <td align=left><? echo $unapproved["name"] ?></td>
				  <td align=left><? echo $unapproved["email"] ?></td>
				  <td> <input name="<?echo $unapproved["id"]?>" type="checkbox"></td>
				</tr>
				<? endwhile; ?>
			  </table>
			  <br><br>
			  <input type="submit" value="Approve!">
			  </form>
			</div>
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
	</body> 
</html>
