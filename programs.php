<?php
require_once 'db/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тренировочные программы - SportGym</title>

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
            <h2 class="section-title"><span class="caption">Тренировочные</span> программы</h2>

            <?php
            $programs_query = 'SELECT title, image FROM gym_programs';

            if( $result = $connect->query( $programs_query ) ) { ?>  
                <!-- Programs -->
                <div class="programs">              
                    <?php while( $program = $result->fetch_assoc() ):?>
                            <div class="program">
                                <div class="program-inner" style="background-image: url('images/<?php echo $program['image'];?>');">
                                    <h3><?php echo $program['title'];?></h3>
                                </div>
                            </div>
                    <?php endwhile;?>
                </div>
            <?php } else {
                echo 'Нет программ' . $connect->error;
            }
            ?>
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