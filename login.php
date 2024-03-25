<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style/styleLogin.css">
</head>
<body>
    <div class="authorization">
    <h2>Вход в личный кабитет:</h2>
<form action="authorProcess.php" method="POST">
        <label for="log">Введите пожалуйста Ваш логин:</label><br><br>
        <input name="login" type="text" placeholder="Логин" id="log"><br><br>
        <label for="passw">Введите пожалуйста ваш пароль:</label><br><br>
        <input name="password" type="password" placeholder="Пароль" id="passw"><br><br>
        <label for="birth">Введите пожалуйста день вашего рождения:</label><br><br>
        <input name="birthday" type="date" placeholder="день вашего рождения" id="birth"><br><br>
        <input name="submit" type="submit" value="Войти">
        <?php
            if(!empty($_SESSION['message'])) {
                echo '<p style="color: red; font-size: 24px">' . $_SESSION['message'] . '</p>';
            } 
                unset( $_SESSION ['message']);
        ?>
</form> 
</div>
</body>
</html>