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
    <meta name="description" content="Cистема мониторинга здоровья и физических показателей">
    <meta http-equiv="Content-language" content="ru-RU">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <meta property="og:description" content="Cистема мониторинга здоровья и физических показателей">
    <meta property="og:url" content="fitness-coach.ru">
    <meta property="og:site_name" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <title>Фитнес-коуч</title>
    <!-- Style -->
    <link rel="stylesheet" href="/assets/css/header/header.css">
    <link rel="stylesheet" href="/assets/css/footer/footer.css">
    <link rel="stylesheet" href="/assets/css/main/heroBlock.css">
    <link rel="stylesheet" href="/assets/css/main/lastNews.css">
    <link rel="stylesheet" href="/assets/css/main/trainingProgram.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<!-- Header -->
<?php
        include "./inc/header.php";
    ?>

<!-- Content -->
<main>
    <section class="heroBlock">
        <div class="content">
            <h1><span>Фитнес-коучинг</span> как путь к трансформации</h1>
            <p>Система мониторинга здоровья и физических показателей</p>
        </div>
    </section>

    <section class="lastNews">
        <div class="content">
            <h2><span>Последняя</span> новость дня</h2>
            <div class="newsBlock">
                <div class="name">
                    <p class="title">Идеальное тело за месяц</p>
                    <p>Анализируем новые методики похудения</p>
                </div>
                <a class="buttonLink" href="#" title="Подробнее">Подробнее</a>
            </div>
        </div>
    </section>

    <section class="trainingProgram">
        <div class="content">
            <h2><span>Программы</span> тренировок</h2>
            <div class="gridProgram">
                <a href="#" class="link" title="Силовая тренеровки">
                    <div class="title">Силовая тренеровки</div>
                    <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
                <a href="#" class="link" title="Кардио тренеровки">
                    <div class="title">Кардио тренеровки</div>
                    <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
                <a href="#" class="link" title="Воркаут тренеровки">
                    <div class="title">Воркаут тренеровки</div>
                    <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
                <a href="#" class="link" title="Кросс">
                    <div class="title">Кросс</div>
                    <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
                <a href="#" class="link" title="Занятия на дому">
                    <div class="title">Занятия на дому</div>
                    <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
                <a href="/training-program" class="link" title="Полный список программ">
                    <div class="title">Полный список программ</div>
                    <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php
        include "./inc/footer.php"
    ?>