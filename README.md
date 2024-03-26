# Учебный проект "Демо-версия сайта для SPA-салона. #
 Учебный сайт для СПА-салона состоит из заглавной части **header**, в которой расположены **вход в личный кабинет**, **меню и логотип сайта**, **основной части main**, содержащей основной контент сайта, где рассказывается о самом салоне, услугах салона и расценках на услуги салона и **нижней части сайта footer**, где указан адрес салона. Информация об акциях салона доступна **только для авторизированных пользователей (имеющих личный кабинет на сайте)**.
 Основная вёрстка сайта находится в файле **index.php**.

 ## Личный кабинет. ##
 Для входа в личный кабинет пользователю необходимо кликнуть правой клавишью мыши **на ссылку "Вход"** и заполнить появившуюся **форму (файл login.php) (ввести свои: login, пароль и дату своего рождения)**. В случае если пользователь все или какие-то отдельные поля ввода заполнил **неправильно**, то **внизу формы появляется сообщение: "Неверно введён логин или пароль"**. В случае, если ползователь **не заполнил форму или не заполнил какие-то отдельные поля ввода**, то внизу формы появляется **сообщение: "Проверьте ещё раз ввели ли Вы логин, пароль или дату рождения."** В случае успешного заполнения формы пользователь попадает в **свой личный кабинет (файл index.php)**, где для него помимо общей информации о СПА-салоне доступна информация, которую **не видят неавторизированные пользователи**, личная информация (сколько дней осталось до дня рождения пользователя), различные акции по скидкам на услуги слона и подарочная акция для пользователя в день его рождения. Для **выхода** из личного кабинета пользователю необходимо нажать правой клавишью мыши на ссылку в правом верхнем углу **на ссылку "Выход"**.
