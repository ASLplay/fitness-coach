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
    <meta name="description" content="Фитнес-коучинг | Программа">
    <meta http-equiv="Content-language" content="ru-RU">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <meta property="og:description" content="Фитнес-коучинг | Программа">
    <meta property="og:url" content="fitness-coach.ru">
    <meta property="og:site_name" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <title>Фитнес-коуч</title>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/header/header.css">
    <link rel="stylesheet" href="../assets/css/footer/footer.css">
    <link rel="stylesheet" href="../assets/css/training-program/program/heroBlock.css">
    <link rel="stylesheet" href="../assets/css/training-program/program/training.css">
    <link rel="stylesheet" href="../assets/css/training-program/program/video.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<!-- Header -->
<?php
        include "../inc/header.php";
    ?>

<!-- Content -->

<?php 
include "../function/connect.php";

$sql = mysqli_prepare($connect, "SELECT * FROM `training-program` WHERE `id_tprogram` = ?");
mysqli_stmt_bind_param($sql, "s", $_GET['program']);
mysqli_stmt_execute($sql);
$result = mysqli_stmt_get_result($sql);
$row = mysqli_fetch_assoc($result);
$newTitle = explode(" ", $row['title'], 2);
?>
<main>
    <section class="heroBlock">
        <div class="content">
            <h1><?php echo "<span>".$newTitle[0]."</span> ".$newTitle[1].""?></h1>
            <p class="hint"><?php echo $row['hint']?></p>

        </div>
    </section>

    <section class="training">
        <div class="content">
            <?php echo "<img loading='lazy' src='../assets/img/program/".$row['img']."'
                alt='".$row['title']."' title='".$row['title']."'>"; 
                ?>

            <p class="text">
                <?php echo $row['text']?>
            </p>

        </div>
    </section>

    <section class="video">
        <div class="content">
            <h2><span>Видео</span> с тренировкой</h2>
            <?php echo $row['video']?>
        </div>
    </section>
</main>

<!-- Footer -->
<?php
        include "../inc/footer.php"
    ?>