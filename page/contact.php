<?php

require ROOT . 'models/contact.php';

if (isRequestPost()) {
// Реализация записи в базу данных
    if (isFormValid()) {
        $_SESSION['captcha_number'] = rand(1000, 9999);
        //$message = createMessage(requestPost('username'), requestPost('email'), requestPost('message'));
       // saveMessage($message);
        $name = requestPost('username');
        $email = requestPost('email');
        $text_comment = requestPost('message');
    // Подключается к базе данных
        //$mysqli = mysqli_connect("localhost", "root", "", "db");
        $sql =  "INSERT INTO `feedback` (`name`, `email`, `comments`) VALUES ('$name', '$email', '$text_comment')";
        $res =  mysql_get_result($link, $sql);
        setFlash('Your message was sent');
        redirect("/index.php?page=contact");
    } 
    
    // todo: убрать
    setFlash('Fill the fields');
}
// Реализация вывода сообщений

$sql = "SELECT * FROM feedback";
$res =  mysql_get_result($link, $sql);
$messages = mysqli_fetch_all($res, MYSQLI_ASSOC) ;
