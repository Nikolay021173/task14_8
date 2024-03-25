<?php
session_start();
    $arrUsers = [
      
                 [
                    'userName' => 'Ирина',
                    'password' => password_hash('1111', PASSWORD_DEFAULT)
                 ],

                  [
                    'userName' => 'Алина',
                    'password' => password_hash('2222', PASSWORD_DEFAULT)
                  ],

                  [
                     'userName' => 'Кристина',
                     'password' => password_hash('3333', PASSWORD_DEFAULT)
                  ],

                  [
                     'userName' => 'Марина',
                     'password' => password_hash('4444', PASSWORD_DEFAULT)
                  ],

    ];

?>