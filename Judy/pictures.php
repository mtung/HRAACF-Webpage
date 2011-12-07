<? 

require_once("includes/common.php"); 

?> 

<!DOCTYPE html>
<!--sets up a picture gallery using prettyPhoto gallery, a jQuery lightbox clone plug-in. 
http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/ --> 
<html>	
	<head>
		<title>HRAACF: Picture Gallery</title>
		<?php include_once("includes/header.php");?>
		<script src="scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="CSS/prettyPhoto.css" media="screen"/>
		
		<!-- calls prettyPhoto function --> 
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto();
			});
		</script>
	</head> 
	
	<body> 
		<?php include_once("identify.php");?> 
		<div id="wrapper">  
			<div id="left-side"> 
			   <?php include_once('includes/navbar.php');?> 
			   <?php include_once('includes/footer.php');?>
			</div> 
			<div id="center"> 
			<div class="content" id="gallery"> 
				<a href="pictures/DSC_0591.JPG" rel="prettyPhoto[winter retreat]"><img src="pictures/DSC_0591.JPG" width="72" height="72"/><a> 
				<a href="pictures/DSC_0552.JPG" rel="prettyPhoto[winter retreat]"><img src="pictures/DSC_0552.JPG" width="72" height="72"/><a> 
				<a href="pictures/DSC_0585.JPG" rel="prettyPhoto[winter retreat]"><img src="pictures/DSC_0585.JPG" width="72" height="72"/><a> 
				<a href="pictures/DSC_0576.JPG" rel="prettyPhoto[winter retreat]"><img src="pictures/DSC_0576.JPG" width="72" height="72"/><a> 
			</div>
			</div>
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
		</div> 
   </body> 
</html>