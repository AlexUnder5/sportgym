<?php
$adminMail = 'admin@gmail.com';
$subject = 'Новая заявка с сайта SportGym';
$send = '';

// Проверяем пришедшие данные
if( isset( $_POST['call-name'] ) ) {
    $name = strip_tags( $_POST['call-name'] );
    $send .= "Имя: {$name} \r\n";
}

if( isset( $_POST['call-phone'] ) ) {
    $phone = strip_tags( $_POST['call-phone'] );
    $send .= "Телефон: {$phone} \r\n";
}

if( isset( $_POST['call-mail'] ) ) {
    $mail = strip_tags( $_POST['call-mail'] );
    $send .= "E-mail: {$mail} \r\n";
}

if( isset( $_POST['call-message'] ) ) {
    $message = strip_tags( $_POST['call-message'] );
    $send .= "Сообщение: {$message} \r\n";
}

// Соединяемся с БД
require_once '../db/connect.php';

// Оправка сообщений на почту, также их запись в БД
if( $send ) {
    $currentDate = date( 'j M Y' );
    $query = "INSERT INTO gym_recording (user_name, user_phone, user_mail, user_message, message_date) VALUES ('{$name}', '{$phone}', '{$mail}', '{$message}', '{$currentDate}')";

    if( $connect->query( $query ) ) {
        if( mail( $adminMail, $subject, $send ) ) {
            header( 'Location: http://' . $_SERVER['HTTP_HOST'] . '/mail/done.php?status=success' );
        } else {
            header( 'Location: http://' . $_SERVER['HTTP_HOST'] . '/mail/done.php?status=error' );
        }
    } else {
        echo 'Не удалось обработать ваш запрос' . $connect->error;
    }
}
