<?php
     function getUsersList() {

        include 'users.php';

        return $arrUsers;
    }

    function existsUser($login) { 

        $users = getUsersList(); 
        
     for($i = 0; $i < count($users); $i++) {
        if($users[$i]['userName'] === $login) {
            return true;
        } 
      }
      return false;
    }

    function checkPassword($login, $password) {
        $users = getUsersList(); 

        for($i = 0; $i < count($users) ; $i++) {
        if($users[$i]['userName'] === $login && password_verify($password, $users[$i]['password'])) {
            return true;
        }
        }
        return false;
    }
    
    function getCurrentUser() {
        $login = $_POST['login'];
		$password = $_POST['password'];
        if(checkPassword($login, $password) === true) {
            return $login;
        }
        return null;
    }


    function numbOfDaysBefBirth($dateBirthday) {
    $today = new DateTime(date('d.m.Y')); 
    $birthday = new DateTime($dateBirthday); 
    $birthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d')); 
    $different = $birthday->diff($today);  
    if ($different->invert) 
    {
        return '<div style="text-align: center;">' . '<h1>До вашего дня рождения осталось:' . ' ' . 
                $different->days . ' ' . 'дн.' . '</h1>' . '</div>';  
    }                               
    else {   
        if ($different->days === 0){    
            return '<div style="color: red; text-align: center;">' . '<h1>' . 
                    'С днём Рождения ' . getCurrentUser() . '</h1>' .
                    '<h2>Счастья, здоровья и процветания желант Вам наш SPA-салон "Пчёлка Никчебиль"</h2>'. 
                    '<h2>В этот торжественный день примите от нас наш подарок 5% скидку на все наши услуги.</h2>' .
                    '</div>';
        }
        else { 
        $birthday->modify('+1year');   
        $different = $birthday->diff($today);
        return '<div style="text-align: center;">' . '<h1>До вашего дня рождения осталось:' . ' ' . 
                $different->days . ' ' . 'дн.' . '</h1>' . '</div>';
        }
    }
}
?>