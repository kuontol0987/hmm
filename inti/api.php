<?php
header("Content-Type: application/json; charset=UTF-8");

define('allow', true);
include_once($_SERVER["DOCUMENT_ROOT"]."/includes.php");


if(isset($_GET["task"]) && $_GET["task"]=="searchuser" && isset($_GET["user"])) {
   echo json_encode($Dfh->searchusers($_GET["user"]), JSON_PRETTY_PRINT);
} else if(isset($_GET["task"]) && $_GET["task"]=="kurac") {
    
} else {
    $api["status"] = 404;
    $api["msg"] = "Not found";
    echo json_encode($api, JSON_PRETTY_PRINT);
}


?>