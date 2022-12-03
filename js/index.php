<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
$fromMail = 'sokolov.nikita2503@gmail.com';
$fromName = 'Progect Форма';

// Сюда введите Ваш email
$emailTo = 'iiiiiiii2281337@gmail.com';
$subject = 'Форма обратной связи на php';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// тело письма
$body = "Получено письмо с сайта testsite.ru \n Имя: $name\n E-mail: $email\nСообщение: $message";

// сообщение будет отправлено в случае, если поле с номером телефона не пустое
if (strlen($email) > 0) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
}

?>