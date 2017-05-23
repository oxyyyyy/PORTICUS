<?php
 
/* Задаем переменные */
 
$name = htmlspecialchars($_POST["name187"], ENT_COMPAT, 'cp1251');
$email = htmlspecialchars($_POST["email841"], ENT_COMPAT, 'cp1251');
$mail = "info@andreytrutenko.com";
 
/* Ваш адрес и тема сообщения */

$address = "elektronikaion@gmail.com";
$sub = "Новая заявка на сайте richlife.info";
 
/* Формат письма */
 
$mes = "Оформлена новая заявка на Cash-Flow!\n
Страница: http://richlife.info
Клиента зовут: $name
E-mail Клиента: $email";
 
/* Отправляем сообщение, используя mail() функцию */
 
$from = "From: $name <$mail> \r\n Reply-To: $mail \r\n";
if (mail($address, $sub, $mes, $from)) {
                header('Refresh:1; URL=http://andreytrutenko.com#goal');
                echo 'Письмо отправлено, через секунду вы вернетесь на сайт';}
else {
                header('Refresh:1; URL=http://andreytrutenko.com');
                echo 'Письмо почему-то не отправлено, через секунду Вы вернетесь на сайт';}
?>