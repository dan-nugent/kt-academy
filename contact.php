<?php
if(!empty($_POST["submit"])) {
	$firstName = $_POST["firstname"];
  $lastName = $_POST["lastname"];
	$sender = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$recipient = "dan--nugent@live.co.uk";
	$mailHeaders = "From: " . $firstName . " ".  $lastName . "<". $sender .">\r\n";
	if(mail($recipient, $subject, $message, $mailHeaders)) {
	    echo "Thank you for your enquiry. We will aim to get back to you as soon as possible.";
	}else{
		echo "Oops something went wrong!";
	}
}
?>
