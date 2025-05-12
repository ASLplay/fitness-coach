<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="stylesheet" href="/assets/css/header/header.css">
    <link rel="stylesheet" href="/assets/css/footer/footer.css">
    <link rel="stylesheet" href="/assets/css/main/heroBlock.css">
    <link rel="stylesheet" href="/assets/css/main/lastNews.css">
    <link rel="stylesheet" href="/assets/css/main/trainingProgram.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Фитнес-коуч</title>
</head>

    <?php
        include "./inc/header.php";
    ?>

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
                    <a class="bottonLink" href="#">Подробнее</a>
                </div>
            </div>
        </section>

        <section class="trainingProgram">
            <div class="content">
                <h2><span>Программы</span> тренировок</h2>
                <div class="gridProgram">
                    <a href="" class="link">
                        <div class="title">Силовая тренеровки</div>
                        <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                    </a>
                    <a href="" class="link">
                        <div class="title">Кардио тренеровки</div>
                        <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                    </a>
                    <a href="" class="link">
                        <div class="title">Воркаут тренеровки</div>
                        <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                    </a>
                    <a href="" class="link">
                        <div class="title">Кросс</div>
                        <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                    </a>
                    <a href="" class="link">
                        <div class="title">Занятия на дому</div>
                        <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                    </a>
                    <a href="" class="link">
                        <div class="title">Полный список программ</div>
                        <img src="./assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php
        include "./inc/footer.php"
    ?>