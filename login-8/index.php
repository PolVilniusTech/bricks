<?php
	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');
	
	session_start();
	global $page;
	
	/* SESSION data persist during the SESSION and regular could access the Page number of times. POST data after processing are trimmed. */
	if (isset($_POST['username'])) { $_SESSION['username'] = $_POST['username']; }
	if (isset($_POST['passwd'])) { $_SESSION['passwd'] = $_POST['passwd']; }
	if (isset($_POST['anticsrf'])) { $_SESSION['anticsrf'] = $_POST['anticsrf']; } else {
		$_SESSION['anticsrf'] = ""; $_SESSION['valid'] = "0";
	}
	if (isset($_POST['submit'])) {
	if (isset($_POST['passcode']) && !empty($_POST['passcode'])) { $_SESSION['passcode'] = $_POST['passcode']; } else { header("Location: index.php?p=emptycode"); session_destroy(); }
	/* In HTML FORM could be placed VISIBLE Data Challange, which would need to ENTER for a regular in the HTML FORM, in this case <passcode>. Sample of similar tech functionality - a CAPTCHA, which are Perfectioned by such Search Engines as Baidu and Google. */
	if (isset($_SESSION['rancod']) && $_SESSION['passcode'] == $_SESSION['rancod']) { echo "<p style='color:green;'>System Message: Passcode is correct:{$_POST['passcode']}.{$_SESSION['rancod']}</p>"; } else { echo "<p style='color:red;'>System Message: Passcode is incorrect:{$_POST['passcode']}.{$_SESSION['rancod']}</p>"; }
	} else { $_SESSION['passcode'] = ""; $_SESSION['valid'] = "0"; }
	
	if(isset($_POST['submit'])) {
	$username=$_POST['username'];
	$pwd=$_POST['passwd'];
	$sql="SELECT * FROM users WHERE name='$username' and password='$pwd'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	/* In HTML FORM placed suplement line of <anticsrf> has to be equal with a line of <ransaf>, which were prepared at code execution time. If someone would want to send phishing attack, they would need knowledge and data of <anticsrf> provided together with the HTML FORM */
	if($count>0 && $_SESSION['ransaf'] == $_SESSION['anticsrf']) {
		/* From protection side there are pair of checks: <anticsrf> and <passcode> who help to keep Security in Check. If Security Mechanism exists, then someone could conduct testing and answer to the Question: Does both of those Security Mechanisms are in place? */
		$_SESSION['valid'] = "1";
		header("Location: index.php?p=index");
		exit();
	}
	$_SESSION['valid'] = "0";
	header("Location: index.php?p=incorrect");
	exit();
	} else {
		$page = "index";
		if(!isset($_SESSION['valid'])) { $_SESSION['valid'] = "0"; $page = "login"; $pagetitle = "Log In"; }
		if(isset($_SESSION['valid']) && $_SESSION['valid'] == "0") { $page = "login"; $pagetitle = "Log In"; }
	}
	
	$ransaf = md5(openssl_random_pseudo_bytes(rand(100,100000)));
	$_SESSION['ransaf'] = $ransaf;
	$rancod = rand(0,9999);
	$_SESSION['rancod'] = $rancod;
	
	/* GET HTTP method are default request method, check Your URL Panel. POST in other Hand are good for sending additional used data of file, password, radio, range and e.t.c. There are number of other HTTP methods, which are functionality specific. */
	if (isset($_GET["p"])) {
	    /* In the Beginning like Content Security Policy tech we are letting through only what are available in the clear pre-defined list (or set). */
		// redirect on invalid page attempts
		if (!in_array(strtolower($_GET["p"]), array(
			"emptycode", "incorrect", "index", "login", "logout"
		))) {
			session_destroy();
			header("Location: index.php?p=login");
			exit();
		}
		
		if ($_GET["p"] == "emptycode") { $page = "emptycode"; $pagetitle = "Forbidden"; $_SESSION['valid'] = "0"; }
		if ($_GET["p"] == "incorrect") { $page = "incorrect"; $pagetitle = "Error"; $_SESSION['valid'] = "0"; }
		if ($_GET["p"] == "index" && $_SESSION['valid'] = "1") { $page = "index"; $pagetitle = "Welcome"; } elseif ($_GET["p"] == "index" && $_SESSION['valid'] = "0") { $page = "login"; $pagetitle = "Log In"; }
		if ($_GET["p"] == "login") { $page = "login"; $pagetitle = "Log In"; $_SESSION['valid'] = "0"; }
		if ($_GET["p"] == "logout") { $page = "logout"; $pagetitle = "Log Out"; session_destroy(); }
	}
	
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the Content Security Policy - a declarative Policy that lets the authors/server administrators/owners of a web application inform the client (i.e. browser) about the sources from which the application expects to load resources. -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' <?php $ranr = md5(openssl_random_pseudo_bytes(rand(99,99999))); echo "'"."nonce-{$ranr}"."'"; /* Content Security Policy are provided via HTTP (or HTTPS) response of Client-Server Model &/ are in-build in HTML. If You don't see them in the HTML, then it were trimmed by Modern Browser. */ ?> html5shiv.googlecode.com; connect-src 'self'; img-src 'self'; style-src 'self'; font-src fonts.googleapis.com; object-src 'self'; media-src 'self'; frame-src 'self'; base-uri 'self'; form-action 'self'; report-uri /some-report-uri;" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>Bricks Login Form #8</title>
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
    <br/><br/><a href="../index.php"><img src="../images/bricks.jpg" alt="Main Bricks Page"/></a><br/>		
	<?php
	/* This is just like some page template for different occurences. */
	if ($page == "login") { ?><br/>
<form method="post" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">
<fieldset>
<legend>Login</legend>
<p><label for="username">Username:</label><input type="text" name="username" id="username" class="textinput" /></p>
<p><label for="password">Password:</label><input 	type="password" name="passwd" id="passwd" class="textinput" /></p>
<p><label>Passcode:</label><?php echo $rancod; /* In some case a Brute-Force attack could be deployed, which should be Noticiable by Administrator Dashboard from where would be possible to make further desicions in data leakage prevention. If adversary are cappable in capturing a Screen View or Data in the Form, then this Security technique would be useless. */ ?></p>
<p><label for="passcode">Reply passcode:</label><input type="passcode" name="passcode" id="passcd" class="textinput" /></p>
<input type="hidden" name="anticsrf" value="<?php 
				      echo $ransaf; ?>" />
<p><input type="submit" name="submit" class="button" value="Enter" /></p>
</fieldset>
</form>
<p><a href="javascript: setcookie();">Try JS:Cookie</a></p>
	<?php };
			if ($page == "index") { ?><br/>
				<p>You have succesfully logged into this Team Account. | <a  class="small button" href="index.php?p=logout">Log Out</a></p>
			<?php };
			if ($page == "incorrect") { ?><br/>
				<p>You have provided wrong Username and Password.<a  class="small button" href="index.php?p=login">Try Again</a></p>
			<?php };
			if ($page == "emptycode") { ?><br/>
				<p>You have provided wrong Security Passcode.<a  class="small button" href="index.php?p=login">Try Again</a></p>
			<?php };
			if ($page == "logout") { ?><br/>
				<p>You have successfully been logged out from the Account.<a  class="small button" href="index.php?p=login">Log In</a></p> 
			<?php }; ?>
    </div>
  </div>

  <script type="text/javascript" nonce="<?php echo $ranr; /* Does this Content Security Policy functionality even works in Modern Browser App? Script protection are good for backward compatibility of old apps. */ ?>">
  function setcookie()
  {
	alert('JS:Cookie');
  }
  </script>
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
