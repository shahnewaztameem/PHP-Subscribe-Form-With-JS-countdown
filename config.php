<?php
session_start();
require_once "PHPMailer-master/PHPMailerAutoload.php";
require_once "sent_mail.php";
$db = new mysqli("localhost", "root", "", "comingsoonsubscriber");

if($db -> connect_errno){
	die("Error establishing connection!");
}