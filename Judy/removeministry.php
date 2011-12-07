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
   		<title>HRAACF: Approve Members</title>
		<?php include_once("includes/header.php");?>
		<script>

			// an XMLHttpRequest
			var xhr = null;

			/*
			 * void
			 * find member()
			 *
			 * Finds an approved ministry.
			 */
			function findministry()
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
				var url = "findministry.php?username=" + document.getElementById("username").value;

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
				  <form onsubmit="findministry(); return false;">
					  Username: <input id="username" type="text">
					  <br><input type="submit" value="Find Ministry">
				  </form>
				  <br><br>
				  <form action="removeministry2.php" method="post">
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
					  <input type="submit" value="Remove Ministry!">
				  </form>
				</div>
			</div>
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
	</body> 
</html>
