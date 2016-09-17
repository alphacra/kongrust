<?php
function sanitize($data){
	return htmlentities(strip_tags($data));
}


if (isset($_SESSION['steamid'])){
$statementl234 = $db->prepare("SELECT * FROM users WHERE steam64 = ?");
$statementl234->execute(array($_SESSION['steamid']));
$userinfo = $statementl234->fetch();
}

/*
function checkRank ($required,$current)
{
if ($required > $current){
	return header("Location: ../permission.php");
}
}
*/

function getIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])){
	$ip=$_SERVER['HTTP_CLIENT_IP'];
	//Is it a proxy address
	}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
	$ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function loggedIn(){ return isset($_SESSION['steamid']);}

function sendResponse($success,$resp)
{
	echo json_encode(array("success"=>$success,"response"=>$resp));
	die();
}

?>
