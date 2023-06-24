<?php

$name = $_POST['name'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = urldecode($name);
$email = urldecode($email);

$name = trim($name);
$email = trim($email);

if (
    mail(
        "moyaknca93@mail.ru",
        "Новое письмо",
        "Имя: " . $name . "\n" .
        "Почта: " . $email . "\n" .
        "Form: no-reply@mydomain.ru \r\n"
    )
) {
    echo ('Письмо успешно отправлено!');
} else {
    echo ('Есть ошибки! Проверьте данные...');
}

?>