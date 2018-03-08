<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 06.03.18
     * Time: 20:52
     */


if (!empty($_POST['username'])) {


    session_start();
    echo "Установлен ID пользователя в session. Username= " .$_POST['username'];

    $_SESSION['username']=$_POST['username'];

}

else
    die("ID wasn't set");

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions, cookies </title>
</head>
<body>





</body>
</html>

