<? 

	// common code
	require_once("includes/common.php");
	require_once("identify.php");
	
	// connect to SQL pages table
	$sql = "SELECT * FROM pages WHERE username = '".$user['username']."'";
	$result = mysql_query($sql);
	$webpage = mysql_fetch_array($result);
	
	// kick users who are not ministry members
	if($user["ministry"] == 0)
	  redirect("index.php");

?> 


<!DOCTYPE html>
<html>	
	<head>
		<title>Harvard-Radcliffe Asian American Christian Fellowship</title>
		<link rel="stylesheet" href="CSS/style2.css"> 
		<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
		
		<!-- Skin CSS file -->
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/assets/skins/sam/skin.css">
		<!-- Utility Dependencies -->
		<script src="http://yui.yahooapis.com/2.9.0/build/yahoo-dom-event/yahoo-dom-event.js"></script> 
		<script src="http://yui.yahooapis.com/2.9.0/build/element/element-min.js"></script> 
		<!-- Needed for Menus, Buttons and Overlays used in the Toolbar -->
		<script src="http://yui.yahooapis.com/2.9.0/build/container/container_core-min.js"></script>
		<script src="http://yui.yahooapis.com/2.9.0/build/menu/menu-min.js"></script>
		<script src="http://yui.yahooapis.com/2.9.0/build/button/button-min.js"></script>
		<!-- Source file for Rich Text Editor-->
		<script src="http://yui.yahooapis.com/2.9.0/build/editor/editor-min.js"></script>
		
		
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
			
			<div id="CMS" class="yui-skin-sam">
				<script type="text/javascript">
				  var myEditor = new YAHOO.widget.Editor('msgpost', {
				  height: '800px',
				  width: '400px',
				  dompath: true //Turns on the bar at the bottom
				  });
				  myEditor.render();
				  
				  //Inside an event handler after the Editor is rendered
				  YAHOO.util.Event.on('somebutton', 'click', function() {
				    //Put the HTML back into the text area
				    myEditor.saveHTML(); 
				    //The var html will now have the contents of the textarea
				    var html = myEditor.get('element').value;
				  });
				</script>	
				<textarea name="msgpost" id="msgpost" cols="50" rows="10">
				  <? echo $webpage["webpage"] ?>
				</textarea>
			</div> 
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
			
		</div>
		
	</body> 
	
</html>
			
	

    
	 
 