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

<?php 
// Входим в аккаунт
include "../function/connect.php";

$sql = mysqli_prepare($connect, "SELECT * FROM `users` WHERE `login` = ? "); // Отправляемый запрос
mysqli_stmt_bind_param($sql, "s", $_SESSION['login']); // Отправляемые данные
mysqli_stmt_execute($sql); // Отправляем запрос
$result = mysqli_stmt_get_result($sql); // Получаем результат

// Записываем данные
if ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $surname = $row['surname'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['id_user'] = $row['id_user'];
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
    <meta name="description" content="Фитнес-коучинг | Профиль">
    <meta http-equiv="Content-language" content="ru-RU">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <meta property="og:description" content="Фитнес-коучинг | Профиль">
    <meta property="og:url" content="fitness-coach.ru">
    <meta property="og:site_name" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <title>Фитнес-коуч</title>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/header/header.css">
    <link rel="stylesheet" href="../assets/css/footer/footer.css">
    <link rel="stylesheet" href="../assets/css/profile/heroBlock.css">
    <link rel="stylesheet" href="../assets/css/profile/navLinks.css">
    <link rel="stylesheet" href="../assets/css/profile/allNotes.css">
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
            <?php echo "<h1><span>$surname</span> $name</h1>" ?>
            <div class="profile">
                <div class="imgProfile"></div>
                <div class="lastNote">
                    <?php 
                        $sql = mysqli_prepare($connect, "SELECT * FROM `notes` WHERE `id_user` = ? ORDER BY `id_note` DESC LIMIT 1"); // Отправляемый запрос
                        mysqli_stmt_bind_param($sql, "s", $_SESSION['id_user']); // Отправляемые данные
                        mysqli_stmt_execute($sql); // Отправляем запрос
                        $result = mysqli_stmt_get_result($sql); // Получаем результат

                        // Записываем данные
                        if ($row = mysqli_fetch_assoc($result)) {
                            // Переделываем дату
                            $newDate = date("d.m.Y", strtotime($row['date']));
                            $date = "Запись от {$newDate}";
                            $note = $row['note'];
                        } else {
                            $date = "Записей нет";
                            $note = "";
                        }
                    ?>
                    <div class="note">
                        <p class="noteDate"><?php echo $date; ?></p>
                        <p class="noteText"><?php echo $note; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="navLinks">
        <div class="content">
            <div class="gridLinks">
                <a href="/profile/addNote.php" class="link" title="Запись в дневник">
                    <div class="title">Запись в дневник</div>
                    <img src="../assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
                <a href="/page404.php" class="link" title="Редактривать профиль">
                    <div class="title">Редактривать профиль</div>
                    <img src="../assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
                <a href="/admin/controllers/logout.php" class="link" title="Выйти из аккаунта">
                    <div class="title">Выйти из аккаунта</div>
                    <img src="../assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </a>
            </div>
        </div>
    </section>

    <section class="allNotes">
        <div class="content">
            <h2><span>Ваш</span> дневник</h2>
            <div class="gridNotes">
                <?php 
                        $sql = mysqli_prepare($connect, "SELECT * FROM `notes` WHERE `id_user` = ? ORDER BY `id_note` DESC"); // Отправляемый запрос
                        mysqli_stmt_bind_param($sql, "s", $_SESSION['id_user']); // Отправляемые данные
                        mysqli_stmt_execute($sql); // Отправляем запрос
                        $result = mysqli_stmt_get_result($sql); // Получаем результат

                        if(!$result){
                            $date = "Записей нет";
                            $note = "";
                            echo "<div class='note'>
                                    <p class='noteDate'>$date</p>
                                    <p class='noteText'>$note</p>
                                </div>";
                        }
                        else {
                            while ($row = mysqli_fetch_assoc($result)){
                            // Переделываем дату
                            $newDate = date("d.m.Y", strtotime($row['date']));
                            $date = "Запись от {$newDate}";
                            $note = $row['note'];
                            echo "<div class='note'>
                                    <p class='noteDate'>$date</p>
                                    <p class='noteText'>$note</p>
                                </div>";
                            }
                        }
                    ?>
            </div>
        </div>
    </section>

</main>

<!-- Footer -->
<?php
        include "../inc/footer.php"
    ?>