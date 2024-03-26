<?php
session_start();
include 'libraryAndDataBase/library.php';
if (!empty($_POST['password']) && !empty($_POST['login']) && !empty($_POST['birthday'])) {
    
    $login = $_POST['login'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];

    $_SESSION['birthday'] = numbOfDaysBefBirth($birthday);
    $_SESSION['currentUser'] = getCurrentUser();

    if(!empty($_SESSION['currentUser'])) {
        $_SESSION['auth'] = true;
        header('Location: index.php');
    } else {
        $_SESSION['message'] = 'Неверно введён логин или пароль';
        header('Location: login.php');
    }
} else {
    $_SESSION['message'] = 'Проверьте ещё раз ввели ли Вы логин, пароль или дату рождения.';
    header('Location: login.php');
}

?>