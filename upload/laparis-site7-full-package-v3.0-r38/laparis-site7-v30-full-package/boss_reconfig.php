<?php
/**
 * USER INSTRUCTION:
 *
 * 1. upload boss_reconfig.php to your opencart folder (/public_html)
 * 2. configure boss_reconfig.php at CONFIGURE HERE section
 * 3. run boss_reconfig.php from your web browser: http://www.yourdomain.com/boss_reconfig.php
 * 4. delete boss_reconfig.php.
 */

################################################################################
### CONFIGURE HERE
################################################################################

$dbdriver = "mysqli";	# Database driver
$dbhost = "localhost";	# Database host name
$dbname = "store"; # Database name
$dbuser = "root"; # Database username
$dbpass = "root"; # Database password
$dbport = "3306"; # Database password
$prefix = "oc_"; # Database prefix tables


################################################################################
### DO NOT EDIT BELOW
################################################################################
if (DIRECTORY_SEPARATOR=='/')
    $absolute_path = dirname(__FILE__);
else
    $absolute_path = str_replace('\\', '/', dirname(__FILE__));


$file = fopen("config.php","w") or exit("NOT FOUND FILE!");
$content2 = "<?php
// HTTP
define('HTTP_SERVER', 'http://" . $_SERVER['HTTP_HOST'] .rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . "/');

// HTTPS
define('HTTPS_SERVER', 'http://" . $_SERVER['HTTP_HOST'] .rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . "/');

// DIR
define('DIR_APPLICATION', '".$absolute_path ."/catalog/');
define('DIR_SYSTEM', '".$absolute_path ."/system/');
define('DIR_IMAGE', '".$absolute_path ."/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', '".$dbdriver."');
define('DB_HOSTNAME', '".$dbhost."');
define('DB_USERNAME', '".$dbuser."');
define('DB_PASSWORD', '".$dbpass."');
define('DB_DATABASE', '".$dbname."');
define('DB_PORT', '".$dbport."');
define('DB_PREFIX', '".$prefix."');";

$success1 = fwrite($file, $content2);
fclose($file);


########## ADMIN ###########
$file = fopen("admin/config.php","w") or exit("NOT FOUND FILE!");
$content3 = "<?php
// HTTP
define('HTTP_SERVER', 'http://" . $_SERVER['HTTP_HOST'] .rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . "/admin/');
define('HTTP_CATALOG', 'http://" . $_SERVER['HTTP_HOST'] .rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . "/');

// HTTPS
define('HTTPS_SERVER', 'http://" . $_SERVER['HTTP_HOST'] .rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . "/admin/');
define('HTTPS_CATALOG', 'http://" . $_SERVER['HTTP_HOST'] .rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . "/');

// DIR
define('DIR_APPLICATION', '".$absolute_path ."/admin/');
define('DIR_SYSTEM', '".$absolute_path ."/system/');
define('DIR_IMAGE', '".$absolute_path ."/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '".$absolute_path ."/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', '".$dbdriver."');
define('DB_HOSTNAME', '".$dbhost."');
define('DB_USERNAME', '".$dbuser."');
define('DB_PASSWORD', '".$dbpass."');
define('DB_DATABASE', '".$dbname."');
define('DB_PORT', '".$dbport."');
define('DB_PREFIX', '".$prefix."');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');";

$success2 = fwrite($file, $content3);
fclose($file);


if ($success1 && $success2) {
	echo "<p style='color: brown; text-align: center; margin: 200px auto; font-size: 120%;'>Install Successfully! </br> Please Delete boss_reconfig.php file!</p>";
} else {
	echo "<p style='color: brown; text-align: center; margin: 200px auto; font-size: 120%;'>Install Failed! </br> Please configure boss_reconfig.php file!</p>";
}