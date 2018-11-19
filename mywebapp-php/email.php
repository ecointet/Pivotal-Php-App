<?php
use Zend\Mail;

$mail = new Mail\Message();
$mail->setBody('This is the text of the email.');
$mail->setFrom('Freeaqingme@example.org', 'Sender\'s name');
$mail->addTo('etienne@cointet.com', 'Etienne Cointet');
$mail->setSubject('TestSubject');

$transport = new Mail\Transport\Sendmail();
$transport->send($mail);
?>