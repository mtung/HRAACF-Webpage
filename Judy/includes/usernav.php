<!-- welcomes user personally if logged in --> 
<div id="usernav">
  <b>Welcome</b><?  
  $html = "<br>".$user["name"];
  if(($user["id"] != 0) & !empty($user["name"]))
  echo $html 
  ?>!

<!-- gives user specific options based on user type (i.e. normal users only get 'log out' and 'change info' options) -->   
<div id="usernavbar"> 
 <?
	$html1 = "<br><a href='logout.php' style='color: #055e11; text-decoration: none'>Log Out</a>";
	$html2 = "<br><a href='login.php' style='color: #055e11; text-decoration: none'>Log In</a>";
	$html3 = "<br><a href='changeaccount.php' style='color: #055e11; text-decoration: none'>Change info</a>";
	$html4 = "<br><a href='approvemembers.php' style='color: #055e11; text-decoration: none'>Approve members</a>";
	$html5 = "<br><a href='createministry.php' style='color: #055e11; text-decoration: none'>Create ministry</a>";
	$html6 = "<br><a href='editministrypage.php?id=".$user["username"]."' style=' color: #055e11; text-decoration: none'>Edit page</a>";
	$html7 = "<br><a href='register.php' style='color: #055e11; text-decoration: none'>Register</a>"; 
	$html8 = "<br><a href='removemembers.php' style='color: #055e11; text-decoration: none'>Remove Members</a>";
	
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
	  print($html5);
	  print($html4);
	  print($html8);
	}
	if($user["ministry"] > 1)
	{
	  print($html6);
	}
?>
</div> 