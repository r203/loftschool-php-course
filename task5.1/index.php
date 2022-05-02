<?php
require_once './vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
  ->setUsername('loftschool-task5@mail.ru')
  ->setPassword('pass_was_changed')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['loftschool-task5@mail.ru' => 'John Doe'])
  ->setTo(['r203@mail.ru'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);

