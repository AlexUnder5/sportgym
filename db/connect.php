<?php
$host = '127.0.0.1';
$userName = 'root';
$userPassword = 'root';
$dbName = 'sportgym';


$connect = @mysqli_connect( $host, $userName, $userPassword, $dbName );

if( mysqli_connect_errno() ) {
    echo 'Не удалось соединится с БД';
    exit();
}
