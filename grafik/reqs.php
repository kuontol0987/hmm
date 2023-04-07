<?php

define('allow', true);
define('admin', true);
include_once($_SERVER['DOCUMENT_ROOT'].'/includes.php');

// if( isset($_SERVER['HTTP_SEC_FETCH_DEST']) && $_SERVER['HTTP_SEC_FETCH_DEST'] != 'iframe' ) {
//     echo 'Direct access not permited!';
//     die();
// }

if (!isset($GET['server']) || empty(isset($GET['server']))) {
    header('Location: /home');
    die();
} else {
    $server = $GET['server'];
    if ($server == "1") {
        $ip = '38.27.122.103';
        $allow = 1;
    } else if ($server == "2") {
        $ip = "135.181.79.113";
        $allow = 1;
    } else if ($server == "3") {
        $ip = "85.10.195.175";
        $allow = 1;
    } else if ($server == "4") {
        $ip = "23.237.42.18";
        $allow = 1;
    } else if ($server == "5") {
        $ip = "51.15.25.208";
        $allow = 1;
    } else if ($server == "6") {
        $ip = "51.159.30.249";
        $allow = 1;
    } else if ($server == "7") {
        $ip = "109.71.9.87";
        $allow = 1;
    } else if ($server == "8") {
        $ip = "49.51.35.158";
        $allow = 1;
    } else if ($server == "9") {
        $ip = "46.166.142.81";
        $allow = 1;
    } else if ($server == "10") {
        $ip = "35.221.231.4";
        $allow = 1;
    } else if ($server == "10") {
        $ip = "69.162.108.171";
        $allow = 1;
    } else if ($server == "10") {
        $ip = "91.232.174.39";
        $allow = 1;
    } else {
        $allow = 0;
        echo 'Please select available server!';
        die();
    }

    $f = file_get_contents('http://'.$ip.'/nginx_status');
    echo $f;
    die();
    
}
?>