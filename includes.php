<?php

/*----------------------------------
	============================
	Website: dstat.pro
	Author: Hazze
	Website url: https://dstat.pro/
	============================
-----------------------------------*/

// DEFINE
if(!defined('allow')) {
	header("HTTP/1.0 404 Not Found");
}

define('455efb72353e549bf5ee517bc6655f8c', TRUE);


// ERRORS
$errors = 1;

if ($errors == 1) {
	error_reporting(E_ALL);
	error_reporting(1); 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
} else {
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
}

ini_set('error_log', 'error_logs');
error_reporting(E_ALL | E_STRICT | E_NOTICE);

// START SESSION
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// csrf

if (!isset($_SESSION['_csrf'])) {
	$_SESSION['_csrf'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['_csrf'];


// ASSETS URL
$assets = '';

// START OB
ob_start();

// SET TIMEZONE
date_default_timezone_set('Europe/Belgrade');

// URL =  for global path url
$path = $_SERVER['DOCUMENT_ROOT'];
/*if(defined('admin')) {
	$path = '../';
} else if(defined('api')) {
	$path = '../';
} else if(defined('pages')) {
	$path = '../../';
} else {
	$path = '.';

	$maintance = false;

	if($maintance == true) {
		include 'maintance.php';
		die();
	}
}
*/

// Configuration Files
include_once($path.'/core/inc/config.php');         			// MySQL Config File

// Classes
include_once($path.'/core/class/db.class.php'); 				// MySQL Class
include_once($path.'/core/class/user.class.php'); 				// User Class
include_once($path.'/core/class/secure.class.php');				// Secure Class
include_once($path.'/core/class/news.class.php');				// News Managment Class
include_once($path.'/core/class/support.class.php');			// Support Class
include_once($path.'/core/class/alert.class.php');				// Alerts Class
include_once($path.'/core/class/logs.class.php');				// Logs Class
include_once($path.'/core/class/ddosforhire.class.php');		// DDOS FOR HIRE Class

// ADMIN
include_once($path.'/core/class/admin.class.php');				// Admin class
include_once($path.'/core/class/banners.class.php');
include_once($path.'/core/class/whois.class.php');	


// Initializing Classes
$DataBase 	= new Database();
$User 		= new User();
$Secure 	= new Secure();
$News 		= new News();
$Support    = new Support();
$Alert 		= new Alert();
$Logs 		= new Logs();
$Admin 		= new Admin();
$Banners 	= new Banners();
$Whois      = new Whois();
$Dfh        = new dfh();


// SANITIZE STRINGS
$POST 	= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$GET 	= filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

?>