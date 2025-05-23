<?php
// Добавление записи
session_start();
include '../../function/connect.php';

$sql = mysqli_prepare($connect,"INSERT INTO `post` (`id_post`, `id_user`, `title`, `text`, `url`, `status`)
VALUE (NULL, ?, ?, ?, ?, ?)");
$status = 'new';
mysqli_stmt_bind_param($sql, "sssss", 
$_SESSION['id_user'], 
$_POST['title'], $_POST['note'], 
$_POST['imgUrl'], 
$status);

mysqli_stmt_execute($sql);
mysqli_stmt_close($sql);

header("Location: ../../profile/");
exit;