# ListenLive Web Remote Control (LLWRC)

An attempt to create a super simple web page that allows to remote control the ListenLive firmware via its ListenLive Network Remote Control daemon.

## Prerequisites

Web server with PHP extensions enabled in the same local network as the ListenLive device. 

## Installation

Download the [master.zip](https://github.com/AutoStatic/listenlive/archive/master.zip) and extract it in a directory that is readable for your webserver. I'm using LLWRC on my WD My Book Live which runs Debian with Apache and created a dedicated `listenlive` virtual host configuration:

	<VirtualHost *:80>
	        ServerAdmin webmaster@localhost
	
	        DocumentRoot /var/www/listenlive/
	        <Directory />
	                Options FollowSymLinks
	                AllowOverride None
	        </Directory>
	        <Directory /var/www/listenlive/>
	                Options Indexes FollowSymLinks MultiViews
	                AllowOverride None
	                Order allow,deny
	                allow from all
	        </Directory>
	
	        ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
	        <Directory "/usr/lib/cgi-bin">
	                AllowOverride None
	                Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
	                Order allow,deny
	                Allow from all
	        </Directory>
	
	        ErrorLog /var/log/apache2/error.log
	
	        # Possible values include: debug, info, notice, warn, error, crit,
	        # alert, emerg.
	        LogLevel warn
	
	        CustomLog /var/log/apache2/access.log combined
	
	</VirtualHost>
