<?php
$host = "MySQL-8.2";
$root = "root";
$password = "";
$dbName = "fitness-coach";

$connect = mysqli_connect($host, $root, $password, $dbName);
if (mysqli_connect_errno()){
    die("Ошибка подключения к БД: ".mysqli_connect_error());
}