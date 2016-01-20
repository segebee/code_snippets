<?php
	if (isset($_POST['email'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		
		$name = strip_tags($name);
		$name = stripslashes($name);
		
		$email = strip_tags($email);
		$email = stripslashes($email);
		
		$phone = strip_tags($phone);
		$phone = stripslashes($phone);
		
		$msg = strip_tags($message);
		$msg = stripslashes($msg);
		
		$to = "segebee1@gmail.com";
		$subject = "NEW Webmail";
		$headers = "From: $name <$email>";
		
		$message = "You have received a new message from your site:\n \n Name: $name \n \n Email: $email \n \n Phone: $phone \n \n Message: $msg";
		
		if (@mail($to,$subject,$message,$headers)) {
			echo "<p style='font-weight:bold;color:green;text-transform:capitalize'>Message sent sucessfully, we will be in touch soon.</p>";
		} else {
			echo "<p style='font-weight:bold;color:red;text-transform:capitalize'>Message not sent due to an error, Please try again.</p>";
		}

	}
	else
	{
		echo "<p style='font-weight:bold;color:red;text-transform:capitalize'>Message not sent due to an error, Please try again.</p>";
	}
?>
