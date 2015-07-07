<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

// Initialize facebook sdk
require_once("lib/facebook.php");
require_once("fbCredentials.php");
$config = array();
$config['appId'] = $AppId;
$config['secret'] = $AppSecret;
$config['fileUpload'] = false;
// optional
$request=  json_encode($_POST);
$request=  json_decode($request);
if(isset($request->username) && !empty($request->username))
{
    $searchUser=$request->username;
   $facebook = new Facebook($config);
if (!isset($_SESSION["fb_accesstoken"])) {
    $facebook->getAccessToken();
}
else
    $facebook->setAccessToken($_SESSION["fb_accesstoken"]);
$uid = $facebook->getUser();
if ($uid == 0) {
    $reponse["status"] = 0;
    echo json_encode($reponse);
    $uid = null;
}

$results = $facebook->api('/search/','get',array('q'=>$searchUser,'type'=>'user'));
$_SESSION['fb_next']=@$results['paging']['next'];

echo json_encode($results['data']);
return;
 
}
