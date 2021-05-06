<?php
	if(isset($_SERVER['argv'])) {
		if(file_exists('reports.php')) {
			$myfile = fopen('reports.php', 'a');
			fwrite($myfile, date("Y.m.d h:i:sa"));
			fwrite($myfile, "\n");
			fwrite($myfile, $_SERVER['argv']);
			fwrite($myfile, "\n");
			fclose($myfile);
		}
		// Bump 2 dev., i.e.
		// https://github.com/zephenryus/php-console-log
	}
?>
