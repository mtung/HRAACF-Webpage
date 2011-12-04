<?
	$html1 = "<a href='logout.php'>Log out</a>";
	$html2 = "<a href='login.php'>Log in</a>";
	$html3 = " | <a href='changeaccount.php'>Change your information</a>";
	$html4 = " | <a href='approvemembers.php'>View unapproved members</a>";
		  
		  
	if($user["id"] != 0)
	{
	  print($html1);
	  print($html3);
	}
	else
	  print($html2);
	
	if($user["id"] == 1)
	  print($html4);
		  
		  
?>