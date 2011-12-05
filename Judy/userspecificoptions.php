<?
	
	$html1 = "<a href='logout.php'>Log out</a>";
	$html2 = "<a href='login.php'>Log in</a>";
	$html3 = "<a href='changeaccount.php'>Change your information</a>";
	$html4 = "<a href='approvemembers.php'>View unapproved members</a>";
	$html5 = "<a href='createministry.php'>Create a ministry</a>";
	$html6 = "<a href='editministrypage.php?id=".$user["username"]."'>Edit your page</a>";
		  
	if($user["id"] != 0)
	{
	  print($html1);
	  print($html3);
	}
	else
	  print($html2);
	
	if($user["exec"] != 0)
	{
	  print($html4);
	  print($html5);	  
	}
	if($user["ministry"] != 0)
	{
	  print($html6);
	}
?>