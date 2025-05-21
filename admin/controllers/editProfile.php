<?php
// Добавление записи
session_start();
include('../../function/connect.php');

// Загрузка фото
if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {

    $uploadDir = "../uploads/imgProfile/";
    $file = $_FILES['photo']['tmp_name'];
    $fileName = basename($_FILES['photo']['name']);

    $newFilename = uniqid()."-".$fileName;
    $destination = $uploadDir . $newFilename;

    move_uploaded_file($file, $destination);

    $sql = mysqli_prepare($connect,"INSERT INTO `img-profile` (`id_img`, `id_user`, `url`) VALUE (NULL, ?, ?)");
    mysqli_stmt_bind_param($sql, "ss", $_SESSION['id_user'], $newFilename);
    mysqli_stmt_execute($sql);
    mysqli_stmt_close($sql);
}

$sql = mysqli_prepare($connect,"UPDATE `users` SET `name` = ?, `surname` = ?, `role` = ?, `login` = ? WHERE `id_user` = ?");
mysqli_stmt_bind_param($sql, "sssss", $_POST['name'], $_POST['surname'], $_POST['role'], $_POST['login'], $_SESSION['id_user']);
mysqli_stmt_execute($sql);
mysqli_stmt_close($sql);

$_SESSION['role'] = $_POST['role'];
$_SESSION['login'] = $_POST['login'];

header("Location: ../../profile/");
exit;