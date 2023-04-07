<?php

	/*----------------------------------
		============================
		Website: dstat.pro
		Author: Hazze
		Website url: https://dstat.pro/
		============================
	-----------------------------------*/
	
	if(!defined('allow')) {
		die('Direct access not permitted!');
 	}

 	if(!defined('455efb72353e549bf5ee517bc6655f8c')) {
		die('Direct access not permitted!');
 	}

	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		// local 
		define("DB_HOST", "localhost"); 	// MySQL Database Host
		define("DB_USER", "root");			// MySQL Username
		define("DB_PASS", "");  			// MySQL Password
		define("DB_NAME", "dstat");  	// Database Name
	} else {
		// pub
		define("DB_HOST", "localhost"); 	// MySQL Database Host
		define("DB_USER", "dstat_pro");			// MySQL Username
		define("DB_PASS", "8M#et6B-4!Hpy0*w");  	// MySQL Password
		define("DB_NAME", "dstat_pro");  		// Database Name
	}
?>