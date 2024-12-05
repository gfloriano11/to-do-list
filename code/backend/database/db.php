<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'kkj');
    define('DB_NAME', 'to_do_list');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error){
        die('Erro:' . $conn->connect_error);
    }