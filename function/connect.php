<?php
// Переменные для подключения к БД


$host = "MySQL-8.2"; //localhost

$root = "root";
$password = "";
$dbName = "fitness-coach";

// Подключаемся к БД
$connect = mysqli_connect($host, $root, $password, $dbName);
// Проверка подключения
if (mysqli_connect_errno()){
    die("Ошибка подключения к БД: ".mysqli_connect_error());
}