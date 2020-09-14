<?php
  //print_r($_POST);
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if(trim($email) == '')
    $error = 'Введите ваш email';
  else if (trim($message) == '')
    $error = 'Ввудите само сообщение';
  else if (strlen($message) < 5)
    $error = 'Сообщение должно быть более 5 символов';

  if($error != '') {
    echo $error;
    exit;
  }

  $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

  mail('Nixer96@yahoo.com', $subject, $message, $headers);

?>
