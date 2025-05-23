<?php
// Добавление записи
session_start();
include '../../function/connect.php';

$sql = mysqli_prepare($connect,"INSERT INTO `notes` (`id_note`, `id_user`, `date`, `note`)
VALUE (NULL, ?, ?, ?)");

mysqli_stmt_bind_param($sql, "sss", $_SESSION['id_user'], $_POST['date'], $_POST['note']);
mysqli_stmt_execute($sql);
mysqli_stmt_close($sql);

header("Location: ../../profile/");
exit;