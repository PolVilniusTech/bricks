<?php
	ini_set( 'user_agent', 'Scraper/0.3 (http://www.websource.lt) PHP/generic/X.Y.Z' );
	ini_set( 'allow_url_fopen', 1 );
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: " . date('D, j M Y h:i:s') . " GMT");

	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');

	$page = 'index';
	$image = 'OWASP_Comparison_2017_vs._2021.png';
	$image_url = 'https://upload.wikimedia.org/wikipedia/commons/7/73/' . $image;

	if(isset($_GET['backup'])) {
		$backupname = __DIR__ . "/backup.png";
		$filename = __DIR__ . "/file.png";
		
		if(file_exists($backupname)) {
			$handle = fopen($backupname, "r");
			$result = fread($handle, filesize($backupname));
			fclose($handle);
			$handle = fopen($filename, "ab");
			if (fwrite($handle, $result) === FALSE) {
				echo "Cannot write to file ($filename).";
			}
			else {
				header('Location: index.php');
				exit;
			}
			fclose($handle);
		}
		else {
			echo "PHP can't handle this.";
		}
	}
	if(isset($_GET['scrap'])) {
		$result = file_get_contents($image_url);
		
		$filename = __DIR__ . "/file.png";
		if(!file_exists($filename) && $result !== FALSE) {
			$handle = fopen($filename, "ab");
			if (fwrite($handle, $result) === FALSE) {
				echo "Cannot write to file ($filename).";
			}
			else {
				header('Location: index.php');
				exit;
			}
			fclose($handle);
		}
		else {
			echo "PHP can't handle this.";
		}
	}
	if(isset($_GET['remove'])) {
		$filename = __DIR__ . "/file.png";
		unlink($filename);
		sleep(5);
		header('Location: index.php');
		exit;
	}
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the Content Security Policy - a declarative policy that lets the authors/server administrators/owners of a web application inform the client (i.e. browser) about the sources from which the application expects to load resources. -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' html5shiv.googlecode.com; connect-src 'self'; img-src 'self' upload.wikimedia.org; style-src 'self'; font-src fonts.googleapis.com; object-src 'self'; media-src 'self'; frame-src 'self'; base-uri 'self'; form-action 'self'; report-uri /some-report-uri;" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>Bricks Content Page #6</title>  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" alt="Main Bricks Page"/></a><p>
		<form method="get" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">		
		<fieldset>
			<legend>Details</legend>
			<?php 
				if ($page == "index") {
					echo "<p>Content:</p>";
					echo "<p> <img src='https://upload.wikimedia.org/wikipedia/commons/7/73/OWASP_Comparison_2017_vs._2021.png' alt='OWASP File from a Backup or Wiki'> </p>";
				}
				if ($page == "index") {
					echo "<p>Content in Question:</p>";
					echo "<p> <img src='file.png' alt='OWASP File from a Backup or Wiki'> </p>";
				}
				if ($page == "index") {
					echo "<p>Content affected by an plausible/probable automatic behavior of an App:</p>";
					echo "<p> <img src='http://localhost/bricks/content-7/index.php' alt='OWASP File from a Backup or Wiki'> </p>";
					echo "<p> <a id='autolink' href='http://localhost/bricks/content-7/index.php?remove=1' target='_SELF'>&nbsp;</a></p>";
				}
			?>
			<p><input type="submit" name="backup" class="button" value="File from a Backup" /></p>
			<p><input type="submit" name="scrap" class="button" value="Scrap File from Wiki" /></p>
			<p><input type="submit" name="remove" class="button" value="Delete File" /></p>
		</fieldset>
		</form></p><br/>
	</div><br/><br/><br/>
	<center>
		<?php 
			if($showhint === true) { 
				echo '<div class="eight columns centered"><div class="alert-box secondary">Hint: ';
				echo 'Keywords: Web Console, Scripting, HTML, flaw of the App, quality of a Tech Integrity from Security view-point.'; 
				echo '<a href="" class="close">&times;</a></div></div>';			
			} 
		?>
	</center>
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
