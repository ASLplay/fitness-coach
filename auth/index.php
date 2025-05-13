<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <!-- SEO -->
    <meta name="description" content="Фитнес-коучинг | Авторизация">
    <meta http-equiv="Content-language" content="ru-RU">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <meta property="og:description" content="Фитнес-коучинг | Авторизация">
    <meta property="og:url" content="fitness-coach.ru">
    <meta property="og:site_name" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <title>Фитнес-коуч</title>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/header/header.css">
    <link rel="stylesheet" href="../assets/css/footer/footer.css">
    <link rel="stylesheet" href="../assets/css/auth/authForm.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<!-- Header -->
<?php
        include "../inc/header.php";
    ?>

<!-- Content -->
<main>
    <section class="authForm">
        <div class="content">
            <h1><span>Авторизация</span></h1>
            <form action="" method="post">
                <input required placeholder="Логин" title="Логин" type="text" name="login">
                <input required placeholder="Пароль" title="Пароль" type="password" name="password">
                <button class="buttonLink" title="Продолжить" type="submit">Продолжить</button>
                <a href="/register" title="У меня нет аккаунта">У меня нет аккаунта</a>
            </form>
        </div>
    </section>
</main>

<!-- Footer -->
<?php
        include "../inc/footer.php"
    ?>