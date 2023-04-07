<?php

/*----------------------------------
	============================
	Website: stresserit.pro
	Author: Hazze
	Website url: https://stresserit.pro/
	============================
-----------------------------------*/

define('allow', true);
include_once('includes.php');


if(isset($GET['PingAddress'])) {

	$rMsg = ['error', 'This option is under update.'];
	echo json_encode($rMsg);
	die();
	
	$IPAddr = @$Secure->SecureTxt($POST['ipaddr']);

	if(empty($IPAddr)) {
        $rMsg = ['error', 'IPv4 adress is empty!'];
        echo json_encode($rMsg);
        die();
	}
	if(!filter_var($IPAddr, FILTER_VALIDATE_IP)) {
        $rMsg = ['error', 'IPv4 adress is invalid!'];
        echo json_encode($rMsg);
        die();
	}


	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}



	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'PING', $IPAddr);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'PING', $IPAddr);
    }

    $result = shell_exec("ping -c 4 -i 0.2 $IPAddr");
    $rMsg = ['success', 'Your request has been processed.', $result];
    echo json_encode($rMsg);
    die();
}

if(isset($GET['Whois'])) {
	$Domain = @$Secure->SecureTxt($POST['domain']);

	if(empty($Domain)) {
        $rMsg = ['error', 'Domain is empty!'];
        echo json_encode($rMsg);
        die();
	}

	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}
	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'WHOIS', $Domain);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'WHOIS', $Domain);
    }

    $Whois->setDomain($Domain);
	$data = $Whois->whois();
    $rMsg = ['success', 'Your request has been processed.', $data];
    echo json_encode($rMsg);
    die();
}


if(isset($GET['PassGen'])) {
	$Lenght = @$Secure->SecureTxt($POST['lenght']);

	if(empty($Lenght)) {
        $rMsg = ['error', 'You need to select valid lenght.'];
        echo json_encode($rMsg);
        die();
	}

	if(!is_numeric($Lenght)) {
        $rMsg = ['error', 'You need to select valid lenght.'];
        echo json_encode($rMsg);
        die();
	}


	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}
	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'PASSGEN', $Lenght);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'PASSGEN', $Lenght);
    }

    $rMsg = ['success', 'Your request has been processed.', $Secure->PasswordGen($Lenght)];
    echo json_encode($rMsg);
    die();
}

if(isset($GET['GetStringBefore'])) {
	$String = @$Secure->SecureTxt($POST['string']);
	$Char = @$Secure->SecureTxt($POST['char']);

	if(empty($String)) {
        $rMsg = ['error', 'You need to input valid string.'];
        echo json_encode($rMsg);
        die();
	}

	if(empty($Char)) {
        $rMsg = ['error', 'You need to input valid characther.'];
        echo json_encode($rMsg);
        die();
	}


	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}
	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'GET STRING BEFORE', $String." before ".$Char);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'GET STRING BEFORE', $String." before ".$Char);
    }

	$result = explode($Char, $String);
    $rMsg = ['success', 'Your request has been processed.', $result[0]];
    echo json_encode($rMsg);
    die();
}


if(isset($GET['GetStringAfter'])) {
	$String = @$Secure->SecureTxt($POST['string']);
	$Char = @$Secure->SecureTxt($POST['char']);

	if(empty($String)) {
        $rMsg = ['error', 'You need to input valid string.'];
        echo json_encode($rMsg);
        die();
	}

	if(empty($Char)) {
        $rMsg = ['error', 'You need to input valid characther.'];
        echo json_encode($rMsg);
        die();
	}


	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}
	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'GET STRING AFTER', $String." after ".$Char);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'GET STRING AFTER', $String." after ".$Char);
    }

	$result = explode($Char, $String);
    $rMsg = ['success', 'Your request has been processed.', $result[1]];
    echo json_encode($rMsg);
    die();
}

if(isset($GET['deleteDuplicateLines'])) {
	$String = @$Secure->SecureTxt($POST['string']);

	if(empty($String)) {
        $rMsg = ['error', 'You need to input valid string.'];
        echo json_encode($rMsg);
        die();
	}


	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}
	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'DELETE DUPLICATE LINES', $String);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'DELETE DUPLICATE LINES', $String);
    }

	// $array = explode("\n", $String);
	// $result = array_unique($array);
	$splitstr = explode("\n", $String);
	$str = implode("\n",array_unique($splitstr));
	// var_dump($str);
    $rMsg = ['success', 'Your request has been processed.', $str];
    echo json_encode($rMsg);
    die();
}

if(isset($GET['HashGen'])) {
	$String = @$Secure->SecureTxt($POST['string']);
	$Type = @$Secure->SecureTxt($POST['hash']);

	if(empty($String)) {
        $rMsg = ['error', 'You need input string.'];
        echo json_encode($rMsg);
        die();
	}

	if(!is_numeric($Type)) {
        $rMsg = ['error', 'You need to select valid hash type.'];
        echo json_encode($rMsg);
        die();
	}

	if($Type == 0) {
        $rMsg = ['error', 'You need to select valid hash type.'];
        echo json_encode($rMsg);
        die();
	}


	if ($Type == 1) {
		$Result = hash('md2', $String);
	} else if ($Type == 2) {
		$Result = hash('md4', $String);
	}  else if ($Type == 3) {
		$Result = hash('md5', $String);
	} else if ($Type == 4) {
		$Result = hash('sha1', $String);
	} else if ($Type == 5) {
		$Result = hash('sha224', $String);
	} else if ($Type == 6) {
		$Result = hash('sha256', $String);
	} else if ($Type == 7) {
		$Result = hash('sha384', $String);
	} else if ($Type == 8) {
		$Result = hash('sha512', $String);
	} else if ($Type == 9) {
		$Result = hash('ripemd128', $String);
	} else if ($Type == 10) {
		$Result = hash('ripemd160', $String);
	} else if ($Type == 11) {
		$Result = hash('ripemd256', $String);
	} else if ($Type == 12) {
		$Result = hash('ripemd320', $String);
	} else if ($Type == 13) {
		$Result = hash('whirlpool', $String);
	} else if ($Type == 14) {
		$Result = hash('tiger128,3', $String);
	} else if ($Type == 15) {
		$Result = hash('tiger160,3', $String);
	} else if ($Type == 16) {
		$Result = hash('tiger192,3', $String);
	} else if ($Type == 17) {
		$Result = hash('tiger128,4', $String);
	} else if ($Type == 18) {
		$Result = hash('tiger160,4', $String);
	} else if ($Type == 19) {
		$Result = hash('tiger192,4', $String);
	} else if ($Type == 20) {
		$Result = hash('snefru', $String);
	} else if ($Type == 21) {
		$Result = hash('snefru256', $String);
	} else if ($Type == 22) {
		$Result = hash('gost', $String);
	} else if ($Type == 23) {
		$Result = hash('gost-crypto', $String);
	} else if ($Type == 24) {
		$Result = hash('adler32', $String);
	} else if ($Type == 25) {
		$Result = hash('crc32', $String);
	} else if ($Type == 26) {
		$Result = hash('crc32b', $String);
	} else if ($Type == 27) {
		$Result = hash('fnv132', $String);
	} else if ($Type == 28) {
		$Result = hash('fnv1a32', $String);
	} else if ($Type == 29) {
		$Result = hash('fnv164', $String);
	} else if ($Type == 30) {
		$Result = hash('fnv1a64', $String);
	} else if ($Type == 31) {
		$Result = hash('joaat', $String);
	} else if ($Type == 32) {
		$Result = hash('haval128,3', $String);
	} else if ($Type == 33) {
		$Result = hash('haval160,3', $String);
	} else if ($Type == 34) {
		$Result = hash('haval192,3', $String);
	} else if ($Type == 35) {
		$Result = hash('haval224,3', $String);
	} else if ($Type == 36) {
		$Result = hash('haval256,3', $String);
	} else if ($Type == 37) {
		$Result = hash('haval128,4', $String);
	} else if ($Type == 38) {
		$Result = hash('haval160,4', $String);
	} else if ($Type == 39) {
		$Result = hash('haval192,4', $String);
	} else if ($Type == 40) {
		$Result = hash('haval224,4', $String);
	} else if ($Type == 41) {
		$Result = hash('haval256,4', $String);
	} else if ($Type == 42) {
		$Result = hash('haval128,5', $String);
	} else if ($Type == 43) {
		$Result = hash('haval160,5', $String);
	} else if ($Type == 44) {
		$Result = hash('haval192,5', $String);
	} else if ($Type == 45) {
		$Result = hash('haval224,5', $String);
	} else if ($Type == 46) {
		$Result = hash('haval256,5', $String);
	} else {
		$rMsg = ['error', 'You need to select valid hash type.'];
		echo json_encode($rMsg);
		die();
	}

	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}
	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'HASH GEN', $String);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'HASH GEN', $String);
    }

    $rMsg = ['success', 'Your request has been processed.', $Result];
    echo json_encode($rMsg);
    die();
}

if(isset($GET['GeoIP'])) {
	$IPAddr = @$Secure->SecureTxt($POST['ip']);

	if(empty($IPAddr)) {
        $rMsg = ['error', 'You need to input valid IPv4 address.'];
        echo json_encode($rMsg);
        die();
	}

	if(!filter_var($IPAddr, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        $rMsg = ['error', 'You need to input valid IPv4 address.'];
        echo json_encode($rMsg);
        die();
	}


	if ($User->IsLoged() == true) {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 3 - time();
		if ($LastUse + 3 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		// 10 sec
		$LastUse = (int) $Secure->getLastUsage()['date'];

		$LimitLeft = $LastUse + 10 - time();
		if ($LastUse + 10 > time()) {
			$rMsg = ['error', 'Please wait '.$LimitLeft.' more seconds.'];
			echo json_encode($rMsg);
			die();
		}
	}

	// csrf
	$Csrf 			= $Secure->SecureTxt($POST['_csrf']);
	if ($Csrf != $token) {
		$rMsg = ['error', 'Invalid _csrf token! Please refresh the page!'];
		echo json_encode($rMsg);
		die();
	}
	
	$req = file_get_contents('http://api.ipstack.com/'.$IPAddr.'?access_key=2194706277fe3c3173b6752f4fddab1f');

	$dzison = json_decode($req, true);
	$ip = $dzison['ip'];
	$continent = $dzison['continent_name'];
	$country = $dzison['country_name'];
	$country_code = $dzison['country_code'];
	$city = $dzison['city'];
	// $flag = $dzison['country_flag'];

    if (!($User->IsLoged()) == true) {
        $Logs->CreateToolsLog('0', 'GEOIP', $IPAddr);
    } else {
        $Logs->CreateToolsLog($User->UserData()['id'], 'GEOIP', $IPAddr);
    }

	// $result = explode($Char, $String);
    $rMsg = ['success', 'Your request has been processed.', $ip, $continent, $country, $country_code, $city];
    echo json_encode($rMsg);
    die();
}
?>