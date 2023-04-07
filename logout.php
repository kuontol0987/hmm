<?php

/*----------------------------------
	============================
	Website: stresserit.pro
	Author: Hazze
	Website url: https://stresserit.pro/
	============================
-----------------------------------*/

define('allow', true);
include_once($_SERVER['DOCUMENT_ROOT'].'/includes.php');

// check login
if (!($User->IsLoged()) == false) {
	// Get Current date, time
	$current_time = time();

	// Remove cookie
	$cookie_expiration_time = $current_time - (30 * 24 * 60 * 60);
	setcookie('l0g1n', '', $cookie_expiration_time, '/', null, null, TRUE);

	// Destroy session
	// session_unset();
	// session_destroy();
	unset($_SESSION["UserLogin"]);
}

$Alert->SaveAlert('You are logged out.', 'success');
header('Location: /home');
die();

?>