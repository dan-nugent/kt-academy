<?php
if(!empty($_POST["submit"])) {
	$firstName = $_POST["firstname"];
  $lastName = $_POST["lastname"];
	$sender = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$recipient = "dan--nugent@live.co.uk";
	$mailHeaders = "From: " . $firstName . "<". $sender .">\r\n";
	if(mail($recipient, $subject, $message, $mailHeaders)) {
	    $test = "Your contact information is received successfully.";
	    $type = "success";
	}
}
?>
