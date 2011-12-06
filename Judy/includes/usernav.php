<div id="usernav">
  Welcome<?  
  $html = ", <br>".$user["name"];
  if(($user["id"] != 0) & !empty($user["name"]))
  echo $html 
  ?>
  <p> What would you like to do?</p> 
  
 <?
	$html1 = "<a href='logout.php'>Log Out</a>";
	$html2 = "<a href='login.php'>Log In</a>";
	$html3 = "<br><a href='changeaccount.php'>Change your information</a></br>";
	$html4 = "<a href='approvemembers.php'>View unapproved members</a>";
	$html5 = "<br><a href='createministry.php'>Create a ministry</a></br></p>";
	$html6 = "<a href='editministrypage.php?id=".$user["username"]."'>Edit your page</a>";
	$html7 = "<br><a href='register.php'>Register</a></br>"; 
		  
	if($user["id"] != 0)
	{
	  print($html1); 
	  print($html3);
	}
	else
	{
	  print($html2);
	  print($html7); 
	}
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

</div> 