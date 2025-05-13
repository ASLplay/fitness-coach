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
    <meta name="description" content="Фитнес-коучинг | Программы">
    <meta http-equiv="Content-language" content="ru-RU">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <meta property="og:description" content="Фитнес-коучинг | Программы">
    <meta property="og:url" content="fitness-coach.ru">
    <meta property="og:site_name" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <title>Фитнес-коуч</title>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/header/header.css">
    <link rel="stylesheet" href="../assets/css/footer/footer.css">
    <link rel="stylesheet" href="../assets/css/training-program/heroBlock.css">
    <link rel="stylesheet" href="../assets/css/training-program/trainingPrograms.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<!-- Header -->
<?php
        include "../inc/header.php";
    ?>

<!-- Content -->
<main>
    <section class="heroBlock">
        <div class="content">
            <h1><span>Программы</span> тренировок</h1>
            <p>Тут вы можете просмотреть все существующие программы тренировок у нас</p>
        </div>
    </section>
    <section class="trainingPrograms">
        <div class="content">
            <div class="gridProgram">
                <a href="#" title="Силовая тренеровки" class="cardProgram">
                    <div class="name">
                        <p class="title">Силовая тренеровки</p>
                        <p>Программа расчитана на усиление силовых показателей</p>
                    </div>
                    <img title="Ссылка" src="../assets/img/icons/arrow.svg" alt="Ссылка">
                </a>
                <a href="#" title="Силовая тренеровки" class="cardProgram">
                    <div class="name">
                        <p class="title">Силовая тренеровки</p>
                        <p>Программа расчитана на усиление силовых показателей</p>
                    </div>
                    <img title="Ссылка" src="../assets/img/icons/arrow.svg" alt="Ссылка">
                </a>
                <a href="#" title="Силовая тренеровки" class="cardProgram">
                    <div class="name">
                        <p class="title">Силовая тренеровки</p>
                        <p>Программа расчитана на усиление силовых показателей</p>
                    </div>
                    <img title="Ссылка" src="../assets/img/icons/arrow.svg" alt="Ссылка">
                </a>
                </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php
        include "../inc/footer.php"
    ?>