
    <meta charset="utf-8">

<?php
require 'mail/PHPMailerAutoload.php';
date_default_timezone_set('America/Halifax');

include_once "conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$timestamp = date("Y-m-d H:i:s",time());



$sql = "INSERT INTO feed (name, email, comment, time) VALUES ('$name', '$email', '$message','$timestamp');";



mysql_query($sql);

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "cyp0911@gmail.com";
$mail->Password = "fifa2002";
$mail->setFrom('cyp0911@gmail.com', 'Yinpeng Chen');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
$mail->addAddress('cyp0911@gmail.com', 'Yinpeng Chen');
$mail->Subject = 'New personal website comment!!';
$mail->Body    = "Received a new message from $name,$email at $timestamp.<br>$message";
$mail->AltBody = 'This is a plain-text message body';
//$mail->addAttachment('img/moosehead.png');
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}











//echo "<script>alert('Thank you for your feedback! We will back to mainpage!'); location.href = 'index.php'</script>";



?>