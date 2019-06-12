<?php
session_start();
$_SESSION['user_id'] = 161872368234;
$uid = strval($_SESSION['user_id']);
$_SESSION['user_pwd_'."{$uid}"] = 1234;

header('Location: public.php');
?>
