<?php

$name= $_POST['name'] ??'No name';
$email=$_POST['email'] ??'No email';
$message=$_POST['message'] ??'';

if (trim($message)===''){
    echo "Mandatory message.";
    exit;
}

$entry="Name: $name\nEmail: $email\nMessage: $message\n----\n";

file_put_contents("feedback.txt",$entry,FILE_APPEND);

Echo "Thank you for the feedback!"
?>