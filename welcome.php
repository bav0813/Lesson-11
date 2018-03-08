<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 06.03.18
     * Time: 20:52
     */


    session_start();

    if (isset($_SESSION['username'])) {
        echo "Привет, " . $_SESSION['username'];

        // Удаляем все переменные сессии.
        unset($_SESSION['username']);
        session_destroy();                          //удаляем идентификатор сессии

    }
    else
    header("Location: index.php",true,302);