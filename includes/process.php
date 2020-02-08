<?php
require("config.php");

if(isset($_POST['subscribe'])){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$db->query("INSERT into subscribers (email) VALUES ('{$email}')");
	
	$_SESSION['message'] = "Email has been sent successfully";
	
	header("location: ../index.php");
}