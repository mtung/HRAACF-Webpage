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
		<script>

			// an XMLHttpRequest
			var xhr = null;

			/*
			 * void
			 * find member()
			 *
			 * Finds an approved member.
			 */
			function findmember()
			{
				// instantiate XMLHttpRequest object
				try
				{
					xhr = new XMLHttpRequest();
				}
				catch (e)
				{
					xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}

				// handle old browsers
				if (xhr == null)
				{
					alert("Ajax not supported by your browser!");
					return;
				}

				// construct URL
				var url = "findmember.php?username=" + document.getElementById("username").value;

				// get quote
				xhr.onreadystatechange = handler;
				xhr.open("GET", url, true);
				xhr.send(null);
			}


			/*
			 * void
			 * handler()
			 *
			 * Handles the Ajax response.
			 */
			function handler()
			{
				// only handle loaded requests
				if (xhr.readyState == 4)
				{
					// display response if possible
					if (xhr.status == 200)
						document.getElementById("display").innerHTML = xhr.responseText;
					else
						alert("Error with Ajax call!");
				}
			}

		</script>
	</head>
	<body> 
		<div id="wrapper">  
		
			<div id="left-side"> 
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			<div id="center"> 
				<div class="useroptions2" id="removemembers"> 
				  <form onsubmit="findmember(); return false;">
					  Username: <input id="username" type="text">
					  <br><input type="submit" value="Find Member">
				  </form>
				  <br><br>
				  <form action="removemembers2.php" method="post">
					  <table cellpadding="8" align="center">
						<tr>
						  <th align=left>Username</th>
						  <th align=left>Name</th>
						  <th align=left>Email</th>
						  <th align=left>Remove?</th>
						</tr>
						<tr id=display>
						</tr>
					  </table>
					  <br><br>
					  <input type="submit" value="Remove Member!">
				  </form>
				</div>
			</div>
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
	</body> 
</html>
