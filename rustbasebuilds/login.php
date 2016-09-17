<?php
session_start();
include('db/db.initialize.php');
include('includes/functions.php');

if(isset($_SESSION['steamid']))
{
	include ('steamauth/userInfo.php');
	$exist = $db->prepare("SELECT * FROM users WHERE steam64 = ?");
	$exist->execute(array($_SESSION['steamid']));
    $exist = $exist->rowCount();
    if (!$exist)
	{
        $SQL = "INSERT INTO users (username,steam64,avatar,regIP,currIP,ban,ban_reason) VALUES (?,?,?,?,?,?,?)";
        $SQL = $db->prepare($SQL);
        $ip = getIP();
        $SQL->execute(array(sanitize($steamprofile['personaname']),$steamprofile['steamid'],$steamprofile['avatarfull'],$ip,$ip,"",""));
        Header('Location: index.php');


    }
	else
	{
        $SQL = "UPDATE users SET username = ?, avatar = ?,currIP = ? WHERE steam64 = ?";
        $SQL = $db->prepare($SQL);
        $ip = getIP();
        $SQL->execute(array(sanitize($steamprofile['personaname']),$steamprofile['avatarfull'],$ip,$_SESSION['steamid']));
        Header('Location: index.php');
    }

}
