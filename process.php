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

$requrl = $_SERVER['REQUEST_URI'];
if ($requrl != "/process.php?Login" && $requrl != "/process.php?Register") {
    if (!($User->IsLoged()) == true) {
        header('Location: /login.php');
        die();
    }
}


if(isset($GET['Register'])) {

    // Username
    if(empty($Secure->SecureTxt($POST['username']))) {
    	$rMsg = ['error', 'Username cannot be empty!'];
        echo json_encode($rMsg);
        die();
    }
    if(strlen($Secure->SecureTxt($POST['username'])) > 15) {
    	$rMsg = ['error', 'Username cannot be more than 15 characthers!'];
        echo json_encode($rMsg);
        die();
    }
    $Username = @$Secure->SecureTxt($POST['username']);

	if(empty($Secure->SecureTxt($POST['useremail']))) {
    	$rMsg = ['error', 'Email cannot be empty!'];
        echo json_encode($rMsg);
        die();
    }

	$Mail = $Secure->SecureTxt($POST['useremail']);

    if (!filter_var($Mail, FILTER_VALIDATE_EMAIL)) {
    	$rMsg = ['error', 'Email is not valid!'];
        echo json_encode($rMsg);
        die();
    }

    // Password
    if(empty($Secure->SecureTxt($POST['userpassword']))) {
    	$rMsg = ['error', 'Password cannot be empty!'];
        echo json_encode($rMsg);
        die();
    }

    if(strlen($Secure->SecureTxt($POST['userpassword'])) > 20 || strlen($Secure->SecureTxt($POST['userpassword'])) < 6) {
    	$rMsg = ['error', 'Password needs to be 6-20 lenght!'];
        echo json_encode($rMsg);
        die();
    }
	
    $Password = @$Secure->SecureTxt($POST['userpassword']);

	$Captcha = $POST['captcha'];
	if ($Captcha != $_SESSION["captcha"]) {
		$rMsg = ['error', 'Captcha is wrong!'];
		echo json_encode($rMsg);
		die();	
	}

    if (!empty($User->UserDataIDusername($Username)['id'])) {
		$rMsg = ['error', 'This username is already in use!'];
		echo json_encode($rMsg);
		die();
    }
    if(empty($error)) {

        if ($User->Register($Username, $Password, $Mail) == true) {
            
			$Logs->CreateUserLog('0', $Username, 'User registered!');
			$rMsg = ['success', 'You are registered! Redirecting...'];
			echo json_encode($rMsg);
			die();
        } else {
			$rMsg = ['error', 'Please try again later.'];
			echo json_encode($rMsg);
			die();
        }
    } 
}

//Login
if(isset($GET['Login'])) {
    $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	$Username = $Secure->SecureTxt($POST['username']);
    if(empty($Username)) {
		$rMsg = ['error', 'Username can\'t be empty!'];
		echo json_encode($rMsg);
		die();
    }

	$Password = $Secure->SecureTxt($POST['userpassword']);

    if(empty($Password)) {
		$rMsg = ['error', 'Password can\'t be empty!'];
		echo json_encode($rMsg);
		die();
    }

    if(empty($error)) {
        if($User->LogIn($Username, $Password) != false) {
			$Logs->CreateUserLog('0', $Username, 'User logged in!');
			$rMsg = ['success', 'Welcome back! Redirecting...'];
			echo json_encode($rMsg);
			die();			
		} else {
			$Logs->CreateUserLog('0', $Username, 'User failed login!');
			$rMsg = ['error', 'Wrong username and password combination!'];
			echo json_encode($rMsg);
			die();
		}
    } else {
		$rMsg = ['error', 'Database error!'];
		echo json_encode($rMsg);
		die();
    }
}

/* ChangePassword */
if (isset($GET['EditProfile'])) {

	// PASS CHECK
	$CPassword = @$POST['cpassword'];
	$NPassword = @$POST['npassword'];
	// VARS
	$Telegram = @$Secure->SecureTxt($POST['telegram']);
	$Fullname = @$Secure->SecureTxt($POST['fullname']);
	$Website  = @$Secure->SecureTxt($POST['website']);

	$CheckFullname = explode(" ", $Fullname);

	if (!empty($Fullname)) {
		if (empty($CheckFullname[0]) || empty($CheckFullname[1])) {
			$rMsg = ['error', 'Full name needs to have 2 words.'];
			echo json_encode($rMsg);
			die();
		}
		if (!empty($CheckFullname[2])) {
			$rMsg = ['error', 'Full name cannot have more than 2 words.'];
			echo json_encode($rMsg);
			die();
		}
	}

	$CheckTelegram = str_split($Telegram);
	if(!empty($Telegram)) {
		if ($CheckTelegram[0] != "@") {
			$rMsg = ['error', 'Telegram id must start with @ symbol.'];
			echo json_encode($rMsg);
			die();
		}
	}

	if (!empty($Website)) {
		if (strlen($Website) > 20 || strlen($Website) < 5) {
			$rMsg = ['error', 'Website url needs to be 5-20 characthers.'];
			echo json_encode($rMsg);
			die();
		}
	}

	if (empty($CPassword)) {
		$rMsg = ['error', 'You need to fill out current password.'];
        echo json_encode($rMsg);
        die();
	}
	if(md5($CPassword) != $User->UserData()['password']) {
		$Logs->CreateUserLog($User->UserData()['id'], $User->UserData()['username'], 'User failed current password on edit!');
		$rMsg = ['error', 'Current password is not valid.'];
		echo json_encode($rMsg);
		die();
	}

	if (empty($NPassword)) {
		if ($User->ChangeUser($User->UserData()['id'], $Fullname, $Telegram, $Website, '0') == true) {
			// Send Success Message
			$Logs->CreateUserLog($User->UserData()['id'], $User->UserData()['username'], 'User edited account without password change!');
			$rMsg = ['success', 'You have edited your account.'];
			echo json_encode($rMsg);
			die();
		} else {
			$rMsg = ['error', 'Something went wrong.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		if ($User->ChangeUser($User->UserData()['id'], $Fullname, $Telegram, $Website, $NPassword) == true) {
			// Send Success Message
			$Logs->CreateUserLog($User->UserData()['id'], $User->UserData()['username'], 'User edited account with password change!');
			$rMsg = ['success', 'You have edited your account.'];
			echo json_encode($rMsg);
			die();
		} else {
			$rMsg = ['error', 'Something went wrong.'];
			echo json_encode($rMsg);
			die();
		}
	}

}

if (isset($GET['ModifyUser'])) {

	if ($User->UserData()['rank'] != 5) {
		$Alert->SaveAlert('You dont have permission to use this.', 'error');
		header("Location: /index.php");
		die();
	}

	// VARS
	$Rank = @$Secure->SecureTxt($POST['rank']);
	$Username = @$Secure->SecureTxt($POST['username']);
	$Email = @$Secure->SecureTxt($POST['email']);
	$Telegram = @$Secure->SecureTxt($POST['telegram']);
	$Fullname = @$Secure->SecureTxt($POST['fullname']);
	$Website  = @$Secure->SecureTxt($POST['website']);
	$userID  = @$Secure->SecureTxt($POST['userID']);
	$NPassword = @$POST['newpw'];

	$CheckFullname = explode(" ", $Fullname);


	if(empty($Username)) {
		$rMsg = ['error', 'You need to input username.'];
		echo json_encode($rMsg);
		die();
	}


	if (!empty($Fullname)) {
		if (empty($CheckFullname[0]) || empty($CheckFullname[1])) {
			$rMsg = ['error', 'Full name needs to have 2 words.'];
			echo json_encode($rMsg);
			die();
		}
		if (!empty($CheckFullname[2])) {
			$rMsg = ['error', 'Full name cannot have more than 2 words.'];
			echo json_encode($rMsg);
			die();
		}
	}

	if(empty($Username)) {
		$rMsg = ['error', 'You need to input username.'];
		echo json_encode($rMsg);
		die();
	}
	
	if(empty($Email)) {
		$rMsg = ['error', 'You need to input email.'];
		echo json_encode($rMsg);
		die();
	}

	$CheckTelegram = str_split($Telegram);
	if(!empty($Telegram)) {
		if ($CheckTelegram[0] != "@") {
			$rMsg = ['error', 'Telegram id must start with @ symbol.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		$Telegram = 'None';
	}

	if (!empty($Website)) {
		if (strlen($Website) > 30 || strlen($Website) < 5) {
			$rMsg = ['error', 'Website url needs to be 5-30 characthers.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		$Website = 'None';
	}

	if (!is_numeric($Rank)) {
		$rMsg = ['error', 'You need to select valid rank.'];
		echo json_encode($rMsg);
		die();	
	}

	$Rank = (int) $Rank;

	if ($Rank != 0 && $Rank != 5) {
		$rMsg = ['error', 'You need to select valid rank.'];
		echo json_encode($rMsg);
		die();	
	}

	if (empty($NPassword)) {
		if ($User->ModifyUser($userID, $Username, $Fullname, $Rank, $Telegram, $Email, $Website, '0') == true) {
			// Send Success Message
			$rMsg = ['success', 'You have edited user account.'];
			echo json_encode($rMsg);
			die();
		} else {
			$rMsg = ['error', 'Something went wrong.'];
			echo json_encode($rMsg);
			die();
		}
	} else {
		if ($User->ModifyUser($userID, $Username, $Fullname, $Rank, $Telegram, $Email, $Website, $NPassword) == true) {
			// Send Success Message
			$rMsg = ['success', 'You have edited user account.'];
			echo json_encode($rMsg);
			die();
		} else {
			$rMsg = ['error', 'Something went wrong.'];
			echo json_encode($rMsg);
			die();
		}
	}

}

/* Buy Plan */
if (isset($GET['ChangeBanner'])) {

	if ($User->UserData()['rank'] != 5) {
		$Alert->SaveAlert('You dont have permission to use this.', 'error');
		header("Location: /index.php");
		die();
	}

	// check pricing plan
	$ID 			= @$Secure->SecureTxt($POST['bannerpos']);
	$Name 			= @$Secure->SecureTxt($POST['bannername']);
	$URL 			= @$Secure->SecureTxt($POST['bannerurl']);
	$Expiring 			= @$Secure->SecureTxt($POST['expiring']);

	if (empty($ID) || !is_numeric($ID)) {
		$rMsg = ['error', 'You need to select valid position.'];
        echo json_encode($rMsg);
        die();
	}
	if (empty($Name)) {
		$rMsg = ['error', 'You need to input valid name.'];
        echo json_encode($rMsg);
        die();
	}

	if (empty($URL)) {
		$rMsg = ['error', 'You need to input valid URL.'];
        echo json_encode($rMsg);
        die();
	}

	if (empty($Expiring) || !is_numeric($Expiring)) {
		$rMsg = ['error', 'You need to select valid expiring.'];
        echo json_encode($rMsg);
        die();
	}

	if ($Expiring == 7) {
		$ExpireDate = time() + 604800;
	} else if ($Expiring == 14) {
		$ExpireDate = time() + 1209600;
	} else if ($Expiring == 30) {
		$ExpireDate = time() + 2592000;
	} else if ($Expiring == 60) {
		$ExpireDate = time() + 5184000;
	} else if ($Expiring == 999) {
		$ExpireDate = time() + 99999999999;
	} else {
		$rMsg = ['error', 'You need to select valid expiring.'];
        echo json_encode($rMsg);
        die();
	}


	if ($Banners->ChangeBanner($ID, $Name, $URL, $ExpireDate) == true) {
		$rMsg = ['success', 'You changed banner.'];
        echo json_encode($rMsg);
        die();
	} else {
		$rMsg = ['error', 'Something went wrong.'];
        echo json_encode($rMsg);
        die();
	}
}


if (isset($GET['AddNews'])) {

	if ($User->UserData()['rank'] != 5) {
		$Alert->SaveAlert('You dont have permission to use this.', 'error');
		header("Location: /index.php");
		die();
	}

	// VARS
	$Title = @$Secure->SecureTxt($POST['title']);
	$Text = @$Secure->SecureTxt($POST['text']);

	if (empty($Title)) {
		$rMsg = ['error', 'You need to input title.'];
        echo json_encode($rMsg);
        die();
	}

	if (strlen($Title) > 15 || strlen($Title) < 5) {
		$rMsg = ['error', 'Title must be 5-15 at lenght.'];
        echo json_encode($rMsg);
        die();
	}
	if (empty($Text)) {
		$rMsg = ['error', 'You need to input message.'];
        echo json_encode($rMsg);
        die();
	}

	if (strlen($Text) < 5) {
		$rMsg = ['error', 'Message must be more than 5 at lenght.'];
        echo json_encode($rMsg);
        die();
	}

	if ($News->addNews($Title, $Text) == true) {
		$rMsg = ['success', 'New message was added to news.'];
        echo json_encode($rMsg);
        die();	
	} else {
		$rMsg = ['error', 'Something went wrong.'];
        echo json_encode($rMsg);
        die();	
	}

}

if (isset($GET['ModifyMessage'])) {

	if ($User->UserData()['rank'] != 5) {
		$Alert->SaveAlert('You dont have permission to use this.', 'error');
		header("Location: /index.php");
		die();
	}

	// VARS
	$Title = @$Secure->SecureTxt($POST['title']);
	$Text = @$Secure->SecureTxt($POST['text']);
	$ID = @$Secure->SecureTxt($POST['messid']);

	if (empty($Title)) {
		$rMsg = ['error', 'You need to input title.'];
        echo json_encode($rMsg);
        die();
	}

	if (strlen($Title) > 15 || strlen($Title) < 5) {
		$rMsg = ['error', 'Title must be 5-15 at lenght.'];
        echo json_encode($rMsg);
        die();
	}
	if (empty($Text)) {
		$rMsg = ['error', 'You need to input message.'];
        echo json_encode($rMsg);
        die();
	}

	if (strlen($Text) < 5) {
		$rMsg = ['error', 'Message must be more than 5 at lenght.'];
        echo json_encode($rMsg);
        die();
	}

	if ($News->modifyNews($ID, $Title, $Text) == true) {
		$rMsg = ['success', 'Message was edited.'];
        echo json_encode($rMsg);
        die();	
	} else {
		$rMsg = ['error', 'Something went wrong.'];
        echo json_encode($rMsg);
        die();	
	}

}

if (isset($GET['DeleteMessage'])) {

	if ($User->UserData()['rank'] != 5) {
		$Alert->SaveAlert('You dont have permission to use this.', 'error');
		header("Location: /index.php");
		die();
	}

	// VARS
	$ID = @$Secure->SecureTxt($POST['messid']);


	if (empty($ID)) {
		$rMsg = ['error', 'Message id is invalid.'];
        echo json_encode($rMsg);
        die();
	}

	if (!is_numeric($ID)) {
		$rMsg = ['error', 'Message id is invalid.'];
        echo json_encode($rMsg);
        die();
	}

	$IsCreated = $News->CountNewsByID($ID)['Count'];

	if($IsCreated == 0) {
		$rMsg = ['error', 'Message doesnt exists.'];
        echo json_encode($rMsg);
        die();
	}

	if ($News->DeleteNews($ID) == true) {
		$rMsg = ['success', 'Message was deleted.'];
        echo json_encode($rMsg);
        die();	
	} else {
		$rMsg = ['error', 'Something went wrong.'];
        echo json_encode($rMsg);
        die();	
	}

}

?>