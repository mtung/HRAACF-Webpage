<?

    // require common code
    require_once("includes/common.php"); 

	// identify user
	require_once("identify.php");
	
	// if user is not exec, then redirect to homepage
	if($user["id"] != 1)
	  redirect("index.php");
	
?>

<!DOCTYPE html>

<html> 
	<head>
	<title>HRAACF: Create Ministry</title>
		<?php include_once("includes/header.php");?> 
		<script>
		function validate(f)
		{
		  if ((f.username.value == "")||(f.name.value == ""))
		  {
			alert("You must fill in all fields.");
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
			<div class="useroptions" id="createministry"> 
				<form action="createministry2.php" method="post" onsubmit="return validate(this);">
				<table cellpadding="5">
				<tr>
				  <td>Ministry Username</td>
				  <td><input name="username" type="text"></td>
				</tr>
				<tr>
				  <td>Ministry Name</td>
				  <td><input name="name" type="text"></td>
				</tr>
				</table>
				<br><br>
				<input type="submit" value="Create Ministry!">
				</form>
			</div>
			</div> 
		</div> 	
	</body>
</html>
