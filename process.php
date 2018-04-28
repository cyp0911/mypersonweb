<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'cyp0911@gmail.com';
$subject = 'New Message from my website';

if($_POST){
mail($to, $subject, $message, "Form: ".$name);



}
echo "Your Message has been sent, Thank you for your message!"; 




?>