<?php

if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = 'martinzatkoiz@gmail.com';
    $headers = "From: ".$mailFrom;
    $txt = "Máš novú správu od ".$name."./n/n".$message;
    
    $mail = mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>
