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
		<? include_once("includes/header.php") ?>
		
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
			
			
			<div class="useroptions" id="changeaccount">
			  <div id="center" class="yui-skin-sam" >
				<script type="text/javascript">
					(function() {
						var Dom = YAHOO.util.Dom,
							Event = YAHOO.util.Event;
						
						var myConfig = {
							height: '250px',
							width: '440px',
							animate: true,
							dompath: true,
							focusAtStart: true
						};

						var state = 'off';
						YAHOO.log('Set state to off..', 'info', 'example');

						YAHOO.log('Create the Editor..', 'info', 'example');
						var myEditor = new YAHOO.widget.Editor('editor', myConfig);
						myEditor.on('toolbarLoaded', function()
						{
							var codeConfig =
							{
								type: 'push', label: 'Submit HTML Code', value: 'editcode'
							};
							YAHOO.log('Create the (editcode) Button', 'info', 'example');
							this.toolbar.addButtonToGroup(codeConfig, 'insertitem');
							
							this.toolbar.on('editcodeClick', function()
							{
								var ta = this.get('element'),
									iframe = this.get('iframe').get('element');

								if (state == 'on')
								{
									state = 'off';
									this.toolbar.set('disabled', false);
									YAHOO.log('Show the Editor', 'info', 'example');
									YAHOO.log('Inject the HTML from the textarea into the editor', 'info', 'example');
									this.setEditorHTML(ta.value);
									if (!this.browser.ie) {
										this._setDesignMode('on');
									}

									Dom.removeClass(iframe, 'editor-hidden');
									Dom.addClass(ta, 'editor-hidden');
									this.show();
									this._focusWindow();
								} 
								else
								{
									state = 'on';
									YAHOO.log('Show the Code Editor', 'info', 'example');
									this.cleanHTML();
									YAHOO.log('Save the Editors HTML', 'info', 'example');
									Dom.addClass(iframe, 'editor-hidden');
									Dom.removeClass(ta, 'editor-hidden');
									this.toolbar.set('disabled', true);
									this.toolbar.getButtonByValue('editcode').set('disabled', false);
									this.toolbar.selectButton('editcode');
									this.dompath.innerHTML = 'Editing HTML Code';
									this.hide();
								}
								return false;
							}, this, true);

							this.on('cleanHTML', function(ev) {
								YAHOO.log('cleanHTML callback fired..', 'info', 'example');
								this.get('element').value = ev.html;
							}, this, true);
							
							this.on('afterRender', function() {
								var wrapper = this.get('editor_wrapper');
								wrapper.appendChild(this.get('element'));
								this.setStyle('width', '100%');
								this.setStyle('height', '100%');
								this.setStyle('visibility', '');
								this.setStyle('top', '');
								this.setStyle('left', '');
								this.setStyle('position', '');

								this.addClass('editor-hidden');
							}, this, true);
						}, myEditor, true);
						myEditor.render();
					})();
				</script>
				<form method="post" action="editministrypage2.php" id="form1">
					<textarea id="editor" name="editor" rows="20" cols="75">
						<? echo $webpage["webpage"] ?>
					</textarea>
				</form>
			  </div>
			</div> 
			
			<div id="right-side"> 
				<?php include_once('includes/usernav.php');?> 
			</div>
			
		</div>
		
	</body> 
	
</html>
			
	

    
	 
 