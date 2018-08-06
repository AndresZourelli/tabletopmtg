<?php
ini_set('display_errors', 1); error_reporting(-1);
if (isset($_POST['submit']))
{
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "admin@tabletopmtg.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers) or die('mail failed');
	header("Location: feedback.html?mailsend");

}



