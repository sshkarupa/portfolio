<?php

$frm_name  = "Myname";
$recepient = "youmail@mail.ru";
$sitename  = "Портфолио фотографий";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);
$txt = "Имя: $name \nE-mail: $email \nСообщение: $message";
mail($recepient, $subject, $txt, "From: $frm_name <$recepient>" . "\r\n" . "Reply-To: $recepient" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
