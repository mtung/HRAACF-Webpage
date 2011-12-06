<?

    // require common code
    require_once("includes/common.php");

  ?>

<!DOCTYPE html>
<html>
	<head>
		<script>
			function validate(f)
			{
			  if (f.old.value == "")
			  {
				alert("You must input old password.");
				return false;
			  }
			  else if (f.new.value == "")
			  {
				alert("You must provide a new password.");
				return false;
			  }
			  else if (f.old.value == f.new.value)
			  {
				alert("Your new password must be different from your old password.");
				return false;
			  }
			  else if (f.new.value != f.new2.value)
			  {
				alert("You must provide the same password twice.");
				return false;
			  }
			  return true;
			}   
		</script>
		
		<title>HRAACF: Change Password</title>
		<?php include_once("includes/header.php");?> 
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
			<div class="useroptions" id="changepassword"> 
				<h1>Change Password</h1> 
				<form action="changepasswordnew2.php" method="post"  onsubmit="return validate(this);">
				Old Password: <input name="old" type="password">
				<br>
				New Password: <input name="new" type="password">
				<br>
				Re-type Password: <input name="new2" type="password">
				<br>
				<input type="submit" value="Change Password">
				<p> <a href="changeaccount.php">go back</a></p> 
			</div>	
			</div> 
			
			<div id="right-side"> 
					<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 	
	</body>
</html>
