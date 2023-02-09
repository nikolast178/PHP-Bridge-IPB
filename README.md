# PHP-Bridge-IPB
User bridge between a PHP website and an IP.Board (IPB) forum.

1. Make sure your IPB installation and PHP website are on the same domain, or that the IPB installation is on a subdomain of the main website's domain.

2. In your IPB administration panel, navigate to System -> Login Management -> User Synchronization. On this page, enable user synchronization and set the path to the IPB files relative to the root of your website.

3. In your PHP website, add the following code (site.php) to establish a connection to your IPB installation.
4. To log a user in to IPB when they log in to your PHP website, use the "login.php" code.
5. To log a user out of IPB when they log out of your PHP website, use the code in "user-log.php".
