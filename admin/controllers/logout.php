<?php
// Выход из аккаунта

// Запускаем сессию
session_start();

// Очищаем данные сессии
unset($_SESSION);
unset($_SESSION['login']);
unset($_SESSION['role']);
unset($_SESSION['id_user']);

session_destroy();

header("Location:../../");
exit;