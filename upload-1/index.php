<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the Content Security Policy - a declarative policy that lets the authors/server administrators/owners of a web application inform the client (i.e. browser) about the sources from which the application expects to load resources. -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' html5shiv.googlecode.com; connect-src 'self'; img-src 'self'; style-src 'self'; font-src fonts.googleapis.com; object-src 'self'; media-src 'self'; frame-src 'self'; base-uri 'self'; form-action 'self'; report-uri /some-report-uri;" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>OWASP Bricks File Upload #1</title>
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'></head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" alt="Main Bricks Page"/></a><br/>
		<p>
			<?php
				if(isset($_POST['upload'])) {
					$filename = basename($_FILES['userfile']['name']);
					$destination = 'uploads/' . $filename;
					if (move_uploaded_file($_FILES['userfile']['tmp_name'], $destination)) {
						echo "<div class=\"alert-box success\">Upload succesful: <a href='$destination'>here</a><a href=\"\" class=\"close\">&times;</a></div>";
						}
					else {
						echo "<div class=\"alert-box alert\">Upload failed.<a href=\"\" class=\"close\">&times;</a></div>";
						}
											}
			?>
			<form enctype="multipart/form-data" action="index.php" method="POST">
				<fieldset>
					<legend>Upload</legend>
					<input name="userfile" type="file" class="small button" /><br/><br/>
					<input type="submit" name="upload" class="small button" id="upload" value="Upload" /><br/><br/>
				</fieldset>
			</form>
		</p><br/>
	</div>
</div>
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="../javascripts/jquery.js"></script>
  
  <script src="../javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="../javascripts/jquery.foundation.forms.js"></script>
  
  <script src="../javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="../javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="../javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="../javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="../javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="../javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="../javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="../javascripts/jquery.placeholder.js"></script>
  
  <script src="../javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="../javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="../javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="../javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="../javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="../javascripts/jquery.js"></script>
  <script src="../javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="../javascripts/app.js"></script>

  
  
</body>
</html>
