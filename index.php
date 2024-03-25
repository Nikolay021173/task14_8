<?php
session_start();
include 'libraryAndDataBase/library.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA-салон</title>
    <link rel="stylesheet" href="style/styleIndex.css">
</head>
<body>
    <div id="wrapper">
<header>
<nav>
        <ul class="menu">
         <li><a href="#">O нас</a></li>
         <li><a href="#">Услуги</a></li>
         <li><a href="#footer">Контакты</a></li>
        </ul>
    </nav>
    <?php
         if(!empty($_SESSION['auth'])) {
         echo '<span class="persAccount">' . $_SESSION['currentUser'] . ' <a href="logout.php">Выход</a></span>'; 
         } 
         else {
            echo '<span  class="persAccount">Личный кабинет <a href="login.php">Вход</a></span>';
         }
         ?>
<img class="logo" src="images/logo.jpg" alt="логотип">
    <h1>SPA-салон "Пчёлка Никчебиль"</h1>    
</header>
<main>
<?php
    if(!empty($_SESSION['auth'])) {
        ?>
         <h3>До 10.04.2024 для наших постоянных клиентов специальная акция
                скидка на все услуги 10%, не упустите свой шанс!</h3>
         <h4></h4>
         <script src="libraryAndDataBase/libraryTimeFunc.js"></script>
         <?php 
            echo $_SESSION['birthday'];
        }
         ?>
         </main>
         <footer>
         <div class="contactInform">
            <p>Наш адрес: 123998 г. Южный, пр. Анастаса Дятлова, д.122\14, тел.: (8765)457-9-89
    </p>
            </div> 
         </footer>
         </div>
</body>
</html>