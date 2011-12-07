<div id="usernav">
  <b>Welcome</b><?  
  $html = ", <br>".$user["name"];
  if(($user["id"] != 0) & !empty($user["name"]))
  echo $html 
  ?>!
  <b><p>What would you like to do?</p></b> 
 
<div id="usernavbar"> 
 <?
	$html1 = "<a href='logout.php' style='color: #055e11; text-decoration: none'>Log Out</a>";
	$html2 = "<a href='login.php' style='color: #055e11; text-decoration: none'>Log In</a>";
	$html3 = "<br><br><a href='changeaccount.php' style='color: #055e11; text-decoration: none'>Change info</a>";
	$html4 = "<br><br><a href='approvemembers.php' style='color: #055e11; text-decoration: none'>Approve members</a>";
	$html5 = "<br><br><a href='createministry.php' style='color: #055e11; text-decoration: none'>Create ministry</a>";
	$html6 = "<br><br><a href='editministrypage.php?id=".$user["username"]."' style=' color: #055e11; text-decoration: none'>Edit page</a>";
	$html7 = "<br><br><a href='register.php' style='color: #055e11; text-decoration: none'>Register</a>"; 
		  
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