<?php
// ----------------------------------------- 
//  The Web Help .com
// ----------------------------------------- 
// remember to replace your@email.com with your own email address lower in this code.

// load the variables form address bar
$name = $_REQUEST["name"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
$from = $_REQUEST["from"];
$verif_box = $_REQUEST["verif_box"];

// remove the backslashes that normally appears when entering " or '
$name = stripslashes($name); 
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$from = stripslashes($from); 

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	// if verification code was correct send the message and show this page
	$message = "Name: ".$name."\n".$message;
	$message = "From: ".$from."\n".$message;
	mail("tyoon@jkaerostart.com", 'Online Form: '.$subject, $_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from");
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
} else {
	// if verification code was incorrect then return to contact page and show error
	header("Location:".$_SERVER['HTTP_REFERER']."?subject=$subject&from=$from&message=$message&wrong_code=true");
	exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="5; URL='../index.php'" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Message Sent</title>
<link href="../scss/main.scss" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<link href="../../css/fadeIn.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/fadeIn.js"></script>
<script type="text/javascript" src="../js/addRemove.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/scrollMenu.js"></script>
<link href="https://fonts.googleapis.com/css?family=Slabo+27px|Source+Sans+Pro" rel="stylesheet"> 
</head>

<body id="messageRedirect">
<div id="messageSent">
	<h3>Your message has been sent!<br>Redirecting in 5 seconds</h3>
</div>
</body>
</html>
