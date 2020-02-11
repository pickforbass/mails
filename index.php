<?php

include "classes/mail.php";

$mail = $_POST['mail'];
$subject = $_POST['subject'].' | '.$_POST['name'].' '.$_POST['lastname'];
$content = $_POST['content'];

//mail($mail, $title, $content);

new mail($mail, $subject, $content);




