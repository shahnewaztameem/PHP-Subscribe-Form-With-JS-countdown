<?php
require 'config.php';

if(isset($_GET['code'])){
	$code = $_GET['code'];
	$result = $db->query("SELECT * FROM subscribers WHERE reset_code = '{$code}'");
	
	if($result->num_rows){
		$data = $result->fetch_object();
		
		if($data->reset_code === $code) {
			$db->query("UPDATE subscribers SET is_active=1, reset_code='' WHERE reset_code='$code'");
			$message = "Hi you can download ebook from <a href='http://localhost/PHP_Subscribe_Form_With_JS_countdown/ebook.pdf'>here</a>";
			
			send_mail([
				'to' => $data->email,
				'from' => 'no reply',
				'message' => $message,
				'subject' => 'Download your Ebook!'
			]);
			$_SESSION['message'] = 'Check your email for downloading your new Ebook!';
		}
	}
	else {
		$_SESSION['message'] = 'Record not found';
	}
	header("location: index.php");
}