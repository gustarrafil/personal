<?php
if(!isset($_POST['submit'])) {
    echo "error";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email)) {
    echo "preciso saber quem é você...";
    exit;
}

$email_from = "gustavotarrafil@gmail.com";
$email_subject = "alguem chamou no site";
$email_body = "voce tem uma mensagem:\nquem mandou: $visitor_email\n mensagem: $message". 
$to = "gustavotarrafil@gmail.com";
$headers = "From: Semail_from";

mail($to,$email_subject,$email_body,$headers); ?>
<?php  ?>