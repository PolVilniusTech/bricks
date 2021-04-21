==Original Lead Author==
https://github.com/Abhi-M
OWASP Bricks - 2.2 Tuivai

==Requirements==

Web Server
SQL Server
PHP Preprocessor
PHPMyAdmin (usually installed with various LAMP, XAMP, WAMP servers)
Web Browser

==Installation==

After installation of Web Server copy this project into the "www" or "htdocs" directory.
It depends where Document Root of the Web Server is.

Start running the Web Server.

Create a new database for Bricks:
	Using the Web Browser locate http://<127.0.0.1>/phpmyadmin/ directory.
	Login into database management tool - graphical user interface (if necessary).
		Crete Database User by giving specific Database Username and Database Password, i.e. bricks:bricks
		Create Database by giving specific Name of the Database, i.e. bricks
	
Go to http://<127.0.0.1>/ on the browser.

Your Browser should redirect automatically to http://<127.0.0.1>/config/.

Fill in the Configuration Details:
	Database username: bricks
	Database password: bricks
	Database name: bricks
	Database host: localhost
	Show executed commands: checked by default
	
Click on Submit button.

It should place pop-up notification to download a file "LocalSettings.php". It is necessary to accept the file and after download is finished to place it in the "www" directory.

Refresh http://<127.0.0.1>/config/ web page.

Click on "Setup/reset database"

Installation finished. 

Bricks will be ready at http://<127.0.0.1>/ on the Browser

Bricks Web Application is Vulnerable to various OWASP Top 10:2013 Security Gaps. 
From testers perspective it's recommended to use this Software in the Test Environment for such purposes as testing OWASP Top 10:2013 Security Gaps or so.

==More Information about Project of the OWASP Bricks==

http://sechow.com/bricks/
https://www.owasp.org/index.php/OWASP_Bricks

==This repo==

No affiliation with any subjects of the previous links
