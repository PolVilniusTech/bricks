<?php
if(!@include_once('LocalSettings.php')) 
{
header( 'Location: config/' ) ;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the Content Security Policy - a declarative policy that lets the authors/server administrators/owners of a web application inform the client (i.e. browser) about the sources from which the application expects to load resources. -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' html5shiv.googlecode.com translate.google.com translate-pa.googleapis.com translate.googleapis.com www.gstatic.com 'sha256-9G+2o+fiD9dlp1RUbKZfhCZNKjLJ8g+2PPLai/Se3nw='; script-src-elem 'self' html5shiv.googlecode.com translate.google.com translate-pa.googleapis.com translate.googleapis.com www.gstatic.com 'sha256-9G+2o+fiD9dlp1RUbKZfhCZNKjLJ8g+2PPLai/Se3nw='; connect-src 'self' translate.googleapis.com translate-pa.googleapis.com; img-src 'self' translate.google.com translate.googleapis.com fonts.gstatic.com www.google.com www.gstatic.com; style-src 'self' translate.googleapis.com fonts.googleapis.com fonts.gstatic.com www.gstatic.com 'sha256-2Ohx/ATsoWMOlFyvs2k+OujvqXKOHaLKZnHMV8PRbIc=' 'sha256-65mkwZPt4V1miqNM9CcVYkrpnlQigG9H6Vi9OM/JCgY=' 'sha256-YcAFp/goa4oZ/go0L/bJqARj1OFlyN88mkdtnxxdwqY=' 'sha256-CwE3Bg0VYQOIdNAkbB/Btdkhu149qZuwgNCMPgNY5zw='; style-src-elem 'self' translate.googleapis.com fonts.googleapis.com fonts.gstatic.com www.gstatic.com 'sha256-CwE3Bg0VYQOIdNAkbB/Btdkhu149qZuwgNCMPgNY5zw='; font-src fonts.googleapis.com fonts.gstatic.com www.gstatic.com; object-src 'self'; media-src 'self'; frame-src 'self'; base-uri 'self'; form-action 'self'; report-uri /some-report-uri;" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>Welcome to OWASP Bricks</title>  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <script src="javascripts/modernizr.foundation.js"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'></head>
<body>
  <!-- Header and Nav -->

  <div class="row">
    <div class="three columns">
      <h1><a href="index.php"><img src="images/bricks.jpg" alt="Main Bricks Page"/></a></h1>
    </div>
    <div class="nine columns">
      <ul class="nav-bar right">
        <li><a href="index.php">Home</a></li>
		<li class="has-flyout">
			<a href="bricks.html">Bricks</a>
			<a href="bricks.html" class="flyout-toggle"><span> </span></a>
			<ul class="flyout">
			<li><a href="login-pages.html">Login pages</a></li>
			<li><a href="file-upload-pages.html">File Upload pages</a></li>
			<li><a href="content-pages.html">Content pages</a></li>
			</ul>
		</li>
        <li><a href="config/">Setup</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </div>
  </div>

  <!-- End Header and Nav -->
 
  <!-- First Band (Image) -->

  <div class="row">
    <div class="twelve columns">
      <a href="http://www.flickr.com/photos/sprengben/4315145017/" target="_blank"><img src="images/123.png" alt="Bricks Home Background"/></a>
    </div>
  </div>
  
  <div class="row">
    <div class="twelve columns">
	<h4>Welcome to Bricks!</h4>
	<p><div id="google_translate_element"></div></p>
	<p>Bricks is a web application security learning platform built on <a href="http://www.php.net/">PHP</a> and <a href="http://www.mysql.com/">MySQL</a>. The project focuses on variations of commonly seen application security issues. Each 'Brick' has some sort of security issue which can be leveraged manually or using automated software tools. The mission is to '<a href="http://owaspbricks.blogspot.com/2013/02/break-bricks.html">Break the Bricks</a>' and thus learn the various aspects of web application security.
	</p>
	<p>Bricks is a completely free and open source project brought to you by <a href="https://www.owasp.org/index.php/Main_Page">OWASP</a>. The <a href="docs/">complete documentation</a> and <a href="https://www.youtube.com/OWASPBricks">instruction videos</a> can also be accessed or downloaded for free. Bricks are classified into three different sections: <a href="docs/login-pages.html">login pages</a>, <a href="docs/file-upload-pages.html">file upload pages</a> and <a href="docs/content-pages.html">content pages</a>.
	</p>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">    
    </div>
  </div>  
  <!-- Footer -->

  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p><a href="http://sechow.com/bricks/" target="_blank">OWASP Bricks</p>
        </div>
        <div class="right">
           <a href="http://www.facebook.com/OWASPBricks" target="_blank"><img src="images/Facebook.png" alt="Social Media 1"/></a>&nbsp;<a href="https://twitter.com/OWASPBricks" target="_blank"><img src="images/Twitter.png" alt="Social Media 2"/></a>&nbsp;<a href="https://sourceforge.net/p/owaspbricks/" target="_blank"><img src="images/Sourceforge.png" alt="Social Media 3"/></a>&nbsp;<a href="https://www.owasp.org/index.php/OWASP_Bricks" target="_blank"><img src="images/owasp.png" alt="Social Media 4"/></a>&nbsp;<a href="http://gplus.to/OWASPBricks" target="_blank"><img src="images/Google+.png" alt="Social Media 5"/></a>&nbsp;<a href="https://www.youtube.com/OWASPBricks" target="_blank"><img src="images/YouTube.png" alt="Social Media 6"/></a>&nbsp;<a href="http://owaspbricks.blogspot.com/" target="_blank"><img src="images/Blogger.png" alt="Social Media 7"/></a>
		</div>
      </div>
    </div>
  </footer>
	
	
	
  </div>

  
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->

  <!-- Translation -->
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  <script src="javascripts/translation.js"></script>

  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

</body>
</html>
