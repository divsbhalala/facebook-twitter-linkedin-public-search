<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
$reponse = array();
if (isset($_POST["fb_accesstoken"])) {
    $_SESSION["fb_accesstoken"] = $_POST["fb_accesstoken"];
    return json_encode($reponse);
}
if (isset($_POST["fb_responce"])) {
    $_SESSION["fb_responce"] = $_POST["fb_responce"];

    return json_encode($reponse);
}

if (!isset($_SESSION["fb_accesstoken"])) {
    $reponse["fb_status"] = 0;
    echo json_encode($reponse);
}
if (isset($_POST['removedir'])) {
    session_destroy();
}
/*
// Initialize facebook sdk
require_once("lib/facebook.php");
require_once("fbCredentials.php");
$config = array();
$config['appId'] = $AppId;
$config['secret'] = $AppSecret;
$config['fileUpload'] = false;
// optional
$facebook = new Facebook($config);
if (!isset($_SESSION["fb_accesstoken"])) {
    $facebook->getAccessToken();
} else
    $facebook->setAccessToken($_SESSION["fb_accesstoken"]);

 //$facebook->setExtendedAccessToken();
$uid = $facebook->getUser();
if ($uid == 0) {
    $reponse["status"] = 0;
    echo json_encode($reponse);
    $uid = null;
}

echo '<pre>';
print_r($facebook->getAccessToken());
echo '<br >';
print_r($_SESSION["fb_accesstoken"]);
echo '<br >';
print_r($results = $facebook->api('/search/', 'get', array('q' => 'markser', 'type' => 'user')));
print_r($facebook->getUser());
