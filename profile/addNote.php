<?php
// Защита от незарегистрированного пользователя
session_start();
// Проаеряем сессию
if (!isset($_SESSION['login'])){
    // Переадрисовываем его
    header("Location:../auth/");
    exit;
}
?>

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
    <meta name="description" content="Фитнес-коучинг | Дневник">
    <meta http-equiv="Content-language" content="ru-RU">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <meta property="og:description" content="Фитнес-коучинг | Дневник">
    <meta property="og:url" content="fitness-coach.ru">
    <meta property="og:site_name" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <title>Фитнес-коуч</title>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/header/header.css">
    <link rel="stylesheet" href="../assets/css/footer/footer.css">
    <link rel="stylesheet" href="../assets/css/profile/addNote.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<!-- Header -->
<?php
        include "../inc/header.php";
    ?>

<!-- Content -->
<main>
    <section class="addNote">
        <div class="content">
            <h2><span>Запись</span> в дневник</h2>
            <form action="../admin/controllers/addNote.php" method="post">
                <div class="infoNote">
                    <input required title="Дата" type="date" name="date">
                    <textarea required placeholder="Запись в дневник" title="Текст" name="note"></textarea> 
                </div>
                <button class="link" title="Создать запись" type="submit">
                    <div class="title">Создать запись</div>
                    <img src="../assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </button>
            </form>
        </div>
    </section>
</main>
<!-- Footer -->
<?php
        include "../inc/footer.php"
    ?>