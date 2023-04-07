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

    // $Logs->CreateLog(0, $User->UserData()["username"], "User closed account!");
	$Logs->CreateUserLog($User->UserData()['id'], $User->UserData()['username'], 'User closed account!');
    $User->userCloseAccount($User->UserData()["id"]);
	// Get Current date, time
	$current_time = time();

	// Remove cookie
	$cookie_expiration_time = $current_time - (30 * 24 * 60 * 60);
	setcookie('l0g1n', '', $cookie_expiration_time, '/', null, null, TRUE);

	// Destroy session
	session_unset();
	session_destroy();
}

$Alert->SaveAlert('You closed your account.', 'success');
header('Location: /home');
die();