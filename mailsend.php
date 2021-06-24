<?php
$name = $_POST['name'];
$user_mail = $_POST['email'];
$message = $_POST['message'];
$projekt = $_POST['projekt'];


$mailfrom = $user_mail;

$email_subject = 'Feedback na web CV';

$email_body = "Meno odosielatela: $name/n".
                "Email odosielatela: $user_mail/n".
                    "Projekt: $projekt/n".
                        "Správa: $message/n";

$to = "martinzatkoiz@gmail.com";

$headers = "From: $mailfrom/r/n";

$headers .= "Reply-to: $user_mail/r/n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");

?>