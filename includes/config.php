<?php
session_start();
$db = new mysqli("localhost", "root", "", "comingsoonsubscriber");

if($db -> connect_errno){
	die("Error establishing connection!");
}