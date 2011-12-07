<?

    // require common code
    require_once("includes/common.php");
	
	// identify user
	require_once("identify.php");

  ?>

<!DOCTYPE html> 
<!-- allows user to change their email address --> 
<html>
	<head>
		<title>HRAACF: Change Email</title>
		<?php include_once("includes/header.php");?> 
		
		<!-- ensures that user has typed a valid input --> 
		<script>
			function validate(f)
			{
			  if (f.email.value == "")
			  {
				alert("You must input an email.");
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
				<?php include_once('includes/navbar.php');?> 
				<?php include_once('includes/footer.php');?>
			</div> 
			<div id="center"> 
			<div class="useroptions" id="login"> 
				<h1>Change Email</h1> 
				<form action="changeemail2.php" method="post" onsubmit="return validate(this);">
				<center> 
				<table>
				  <tr>
					<td>Email:</td>
					<td><input name="email" type="text"></td>
				  </tr>
				  <tr>
					<td colspan="2" align="center"><input type="submit" value="Change Email" ></td>
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

