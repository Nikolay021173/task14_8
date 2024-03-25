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
        return '<p>До вашего дня рождения осталось:' . ' ' . $different->days . '</p>';  
    }                               
    else {   
        if ($different->days === 0){    
            return '<p>' . 'С днём Рождения ' . getCurrentUser() . '</p>';
        }
        else { 
        $birthday->modify('+1year');   
        $different = $birthday->diff($today);
        return '<p>До вашего дня рождения осталось:' . ' ' . $different->days . 'дн.' . '</p>';
        }
    }
}

 /*   function numbOfDaysBefBirth($birthday)
{
    $first = DateTime::createFromFormat("d-m-Y", "01-02-2024");
$second = DateTime::createFromFormat("d-m-Y", "21-03-2025");
 
$interval = $first->diff($second);
echo "Difference: " . $interval->format('%R%a days'), PHP_EOL;*/
  
        
    

   /* $DateToday = new DateTime(date('d.m.Y')); // Текущая дата
    $DateBirth = new DateTime($date_birthday);  // Дата рождения
    //$DateBirth->setDate($DateBirth->format('Y'), $DateBirth->format('m'), $DateBirth->format('d')); // Меняем год на текущий
    print_r($DateBirth);
    print_r($DateToday);
    $different = $DateBirth->diff($DateToday);  // Вычисляем разницу между датами
    if ($different->invert) // отрицательный период(т.е. сегодняшняя дата меньше даты др)
    {
        return $different->days;  // выводим кол-во дней 
    }                               
    else {   
        if ($different->days === 0){    // если период и интервал дней = 0, значит сегодня др
            return $different->days;
        }
        else { // все  остальное значит что др уже прошел
        $DateBirth->modify('+1year');   // добавляем год к дате рождения, для подсчета дней от сегодняшней даты до след др
        $different = $DateBirth->diff($DateToday); // снова вычисляем разницу между датами
        return $different->days;
        }
    } 




}

  /*  function numbOfDaysBefBirth($dataBirthday) {
        $DateToday = new DateTime(date('d.m.Y')); // Текущая дата
    $DateBirth = new DateTime($dataBirthday);  // Дата рождения
   // $DateBirth->setDate($DateBirth->format('Y'), $DateBirth->format('m'), $DateBirth->format('d')); // Меняем год на текущий
    print_r($DateBirth);
    print_r($DateToday);
    $different = $DateBirth->diff($DateToday);  // Вычисляем разницу между датами
    if ($different->invert) // отрицательный период(т.е. сегодняшняя дата меньше даты др)
    {
        return $different->days;  // выводим кол-во дней 
    }                               
    else {   
        if ($different->days === 0){    // если период и интервал дней = 0, значит сегодня др
            return $different->days;
        }
        else { // все  остальное значит что др уже прошел
        $DateBirth->modify('+1year');   // добавляем год к дате рождения, для подсчета дней от сегодняшней даты до след др
        $different = $DateBirth->diff($DateToday); // снова вычисляем разницу между датами
        return $different->days;
        }
    } 



        /*$todaysDay = date_create(date('d.m.Y'));
        $birthday = new DateTime($dataBirthday);
        $date = date_create();
        date_date_set($date, 2001, 2, 3);
        //$dataBirthday->setDate($dataBirthday->format('Y'), $dataBirthday->format('m'), $dataBirthday->format('d'));
       /* $birthday = new DateTime($dataBirthday);  
        $birthday->setDate($birthday->format('Y-m-d')); */

       /* $dayPromotion = date_create($dataBirthday);
        $diff = date_diff($todaysDay, $dayPromotion);

       return $diff->format('%a дн.');*/
   /* }*/
?>