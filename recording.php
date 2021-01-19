<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись на занятия - SportGym</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="favicon.png"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- Header -->
<header id="header">
    <div class="container">
        <nav>
            <a href="index.php">Главная</a>
            <a href="programs.php">Тренировочные программы</a>
            <a href="trainers.php">Наши тренера</a>
            <a href="recording.php">Запись</a>
            <a href="contacts.php">Контакты</a>
        </nav>

        <img src="images/logo.png" alt="" class="logo">
    </div>
</header>

<main>
    <!-- Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title"><span class="caption">Запись</span> на тренировки</h2>

            <form action="mail/callform.php" method="POST" class="recording">
                <label for="call-name">Ваше имя:</label>
                <input type="text" id="call-name" name="call-name">

                <label for="call-phone">Ваш телефон:</label>
                <input type="text" id="call-phone" name="call-phone">

                <label for="call-mail">Ваш email:</label>
                <input type="text" id="call-mail" name="call-mail">

                <label for="call-message">Сообщение:</label>
                <textarea id="call-message" cols="30" rows="10" name="call-message"></textarea>

                <button type="submit">Записаться</button>
            </form>
        </div>
    </section>
</main>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="footer-top">
            <img src="images/logo.png" alt="" class="logo">

            <nav>
                <a href="index.php">Главная</a>
                <a href="programs.php">Тренировочные программы</a>
                <a href="trainers.php">Наши тренера</a>
                <a href="recording.php">Запись</a>
                <a href="contacts.php">Контакты</a>
            </nav>
        </div>
    </div>

    <div class="container">
        <p class="copy">Copyright © 2021 - SportGym - Все права защищены</p>
    </div>
</footer>
    
</body>
</html>