<?php
require("../config.php");

if(isset($_POST['subscribe'])){
	//$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$email = $_POST['email'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = $db->query("SELECT * FROM subscribers WHERE email = '$email'");
		if($result->num_rows){
			$_SESSION['message'] = "Email already exists!";
		}
		else {
			$uniqueCode = md5(crypt(rand(), 'xyz'));
			$db->query("INSERT INTO subscribers(email,reset_code) VALUES('{$email}', '{$uniqueCode}')");
			$_SESSION['message'] = "Please verify your email address to get free ebook!";
			$message = "Hi! You just subscribed for our ebook. In order to get that you need to verify your email. Please verify by clicking <a href='http://localhost/PHP_Subscribe_Form_With_JS_countdown/verify_email.php?code=$uniqueCode'>here</a>";

			send_mail([
				'to' => $email,
				'from' => 'no reply',
				'message' => $message,
				'subject' => 'Verify Email'
			]);
		}
	}
	else {
		$_SESSION['message'] = "Invalid email formate";
	}
	
	//check for dupliucate emails
	
	
	header("location: ../index.php");
}