<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 06.03.18
     * Time: 20:38
     */


    //Сделать 3 страницы:
    //1. Форма с input type=text name=username.
    //2. Обработчик формы. Если имя из поля username не пустое. Записываем его в переменную $_SESSION['username'].


//3. Страница приветствия. Если в переменной $_SESSION['username'] есть данные. Выводим сообщение
    // "Привет, " . $_SESSION['username'].Если же нету - редиректим на страницу №1
    ?>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions, cookies </title>
</head>
<body>


<form method="post" action="handler.php">
    <label for="txt">Username:</label>
    <input type="text" name="username" id="txt">
    <button type="submit">Submit</button>

</form>


</body>
</html>
