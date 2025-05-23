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
    <meta name="description" content="Фитнес-коучинг | Редактор профиля">
    <meta http-equiv="Content-language" content="ru-RU">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <meta property="og:description" content="Фитнес-коучинг | Редактор профиля">
    <meta property="og:url" content="fitness-coach.ru">
    <meta property="og:site_name" content="Фитнес-коучинг. Cистема мониторинга здоровья и физических показателей">
    <title>Фитнес-коуч</title>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/header/header.css">
    <link rel="stylesheet" href="../assets/css/footer/footer.css">
    <link rel="stylesheet" href="../assets/css/profile/editProfile.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<!-- Header -->
<?php
        include "../inc/header.php";
    ?>

<?php 

include "../function/connect.php";
$sql = mysqli_prepare($connect, "SELECT * FROM `users` WHERE `login` = ?");
mysqli_stmt_bind_param($sql, "s", $_SESSION['login']);
mysqli_stmt_execute($sql);
$result = mysqli_stmt_get_result($sql);
$row = mysqli_fetch_assoc($result);

?>
<!-- Content -->
<main>
    <section class="editProfile">
        <div class="content">
            <h2><span>Редактировать</span> профиль</h2>
            <form action="../admin/controllers/editProfile.php" method="post" enctype="multipart/form-data">
                <input accept="image/png, image/jpeg, image/gif, .png, .jpg, .jpeg, .gif" class="fileInput" title="Фото" type="file" name="photo">
                <div class="info">
                    <input <?php echo "value='".$row['name']."'"; ?> required placeholder="Имя" title="Имя" type="text" name="name" pattern="^[a-zA-Zа-яА-ЯёЁ]+$" maxlength="100">
                    <input <?php echo "value='".$row['surname']."'"; ?> required placeholder="Фамилия" title="Фамилия" type="text" name="surname" pattern="^[a-zA-Zа-яА-ЯёЁ]+$" maxlength="100">
                    <input <?php echo "value='".$row['login']."'"; ?> required placeholder="Логин" title="Логин" type="text" name="login" pattern="^[a-zA-Zа-яА-ЯёЁ0-9]+$" maxlength="100">
                    <select required placeholder="Роль" title="Роль" name="role">
                        <option <?php echo ($_SESSION['role'] === 'coach') ? 'selected' : ''; ?> value="coach">Тренер</option>
                        <option <?php echo ($_SESSION['role'] === 'student') ? 'selected' : ''; ?> value="student">Ученик</option>
                    </select>
                </div>
                <button class="link" title="Сохранить" type="submit">
                    <div class="title">Сохранить</div>
                    <img src="../assets/img/icons/arrow.svg" alt="Ссылка" title="Ссылка">
                </button>
            </form>
        </div>
    </section>
</main>

<script src="../assets/js/previewImg.js"></script>
<!-- Footer -->
<?php
        include "../inc/footer.php"
    ?>

