<div id="usernav">
  Welcome<?  
  $html = ", ".$user["name"];
  if(($user["id"] != 0) & !empty($user["name"]))
  echo $html 
  ?>!
  <p> What would you like to do?</p> 



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

<li><a href="ministrypage.php?id=<?echo $current["username"]?>"><?echo $current["name"]?></a></li>
<? endwhile ?>
	
?>


  
<ul id="menu" class="menu collapsible" > 
	<li><a href="">   </a></li>
	<li><a href="">   </a></li>
</ul> 


  <a class="button" href="login.php"><span>Submit</span></a>
</div> 