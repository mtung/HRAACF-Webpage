<?

    // require common code
    require_once("includes/common.php");
	require_once("identify.php");

  ?>

<!DOCTYPE html>

<html>
	<head>
		<title>HRAACF: Change Name</title>
		<link rel="stylesheet" href="CSS/style2.css"> 
		<link href='http://fonts.googleapis.com/css?family=Lato:300|Raleway:100' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
		<script src="scripts/jquery-1.2.1.min.js" type="text/javascript"></script>
		<script src="scripts/menu.js" type="text/javascript"></script>
		<script src="scripts/jquery.cookie.js" type="text/javascript"></script>
		<script>
			function validate(f)
			{
			  if (f.name.value == "")
			  {
				alert("You must input a name.");
				return false;
			  }
			  return true;
			}   
		</script>
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
			<div class="useroptions" id="changename"> 
				<h1>Change Name</h1> 
				<form action="changename2.php" method="post" onsubmit="return validate(this);">
				<center> 
				<table>
				  <tr>
					<td>Full Name:</td>
					<td><input name="name" type="text"></td>
				  </tr>
				  <tr>
					<td colspan="2" align="center"><input type="submit" value="Change Name"></td>
				  </tr>
				</table>
				</center> 
				</form>
				<p> <a href="changeaccount.php">go back</a></p> 
			</div>	
			</div> 
			
			<div id="right-side"> 
					<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 	
	</body>
</html>
