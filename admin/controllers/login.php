<?php
// Запуск сессии
session_start();

// Подключаемся к БД
include "../../function/connect.php";

// Делаем запись в БД
$sql = mysqli_prepare($connect, "SELECT * FROM `users` WHERE `login` = ? AND `password` = ?"); // Отправляемый запрос
mysqli_stmt_bind_param($sql, "ss", $_POST['login'], $_POST['password']); // Отправляемые данные
mysqli_stmt_execute($sql); // Отправляем запрос
$result = mysqli_stmt_get_result($sql); // Получаем результат

// Записываем в сессию
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['role'] = $row['role'];
    $_SESSION['login'] = $row['login'];
    $_SESSION['id_user'] = $row['id_user'];

    header("Location:../../profile/");
    exit;
} else {
    header("Location:../../auth/index.php?message=Некоректный логин или пароль");
    exit;
}
