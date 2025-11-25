<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "shebakeshfx@gmail.com"; // <-- здесь укажи email директора
    $subject = "Новый заказ с сайта пекарни";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Имя: $name\nEmail: $email\nТелефон: $phone\nЗаказ:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thanks.html");
    } else {
        echo "Ошибка отправки. Попробуйте снова.";
    }
}
?>
