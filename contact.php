<?php
include 'smtp/Send_Mail.php';

 if($_SERVER['REQUEST_METHOD'] == "POST")
	//$name = $_POST['name'];
	$email = $_POST['email'];
	$subject1 = $_POST['subject'];
	$body = $_POST['message'];
	
	$to = "cgiadmin@yourhostingaccount.com";
	$subject = $subject1;
	$from = $email;
	$headers = "From:" . $from;
	if(Send_Mail($to,$subject,$body))
	{
		echo "<span style = 'color:green; font-weight:bold;'> Message Send successfully</span>";
		header( 'Location: index.php' );
		die();
	}else{
		echo "<span style = 'color:red; font-weight:bold;'> Failed To Message Send</span>";
	}
	
         
?>
