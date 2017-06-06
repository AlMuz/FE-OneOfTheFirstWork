<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$service = $_REQUEST['service'];
$sum = $_REQUEST['sum'];
$comment = $_REQUEST['comment'];
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=utf-8 \r\n";

$message = "<p>Новый заказ</p>
<p><strong>Имя:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Услуга:</strong> $service</p>
<p><strong>Кол-во:</strong> $sum</p>
<p><strong>Комментарий:</strong> $comment</p>";

mail( "almuz@inbox.lv", "Новый заказ",
    $message, $headers );
  header( "Location: http://dissextor.tk/index6.html" );
?>