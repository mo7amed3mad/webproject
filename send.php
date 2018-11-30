<?php
include('start.html');
$Em1 = $_POST['email-1'];
$Em2 = $_POST['email-2'];
$Em3 = $_POST['email-3'];
$Em4 = $_POST['email-4'];
$Em5 = $_POST['email-5'];
$Em6 = $_POST['email-6'];
$Em7 = $_POST['email-7'];
$Em8 = $_POST['email-8'];

$subject = $_POST['subject'];
$message = $_POST['message']; 
if ($_POST['submit']){

	mail($Em1, $subject, $message);
	mail($Em2, $subject, $message);
	mail($Em3, $subject, $message);
	mail($Em4, $subject, $message);
	mail($Em5, $subject, $message);
	mail($Em6, $subject, $message);
	mail($Em7, $subject, $message);
	mail($Em8, $subject, $message);
	echo "message sent succes"
}

?>