<?php
// Запуск сессии
session_start();

// Подключение к БД
include "../../function/connect.php";

// Шаблон запроса
$sql = mysqli_prepare($connect,"INSERT INTO `users` (`id_user`, `role`, `login`, `password`, `name`,`surname`)
VALUE (NULL, ?, ?, ?, ?, ?)");

// Данные
mysqli_stmt_bind_param($sql, "sssss", 
$_POST['role'], 
$_POST['login'],
$_POST['password'],
$_POST['name'],
$_POST['surname']);
// Отправляем 
mysqli_stmt_execute($sql);
mysqli_stmt_close($sql);

// Записываем в сессию данные
$_SESSION['login'] = $_POST['login'];
$_SESSION['role'] = $_POST['role'];

header("Location:../../profile/");
exit;