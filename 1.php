<?php

$login = $_GET['login'];
$pass = $_GET['pass'];
$age = $_GET['age'];

?>

<form action="" method="get">

    <label for="login">Логин</label>
    <input type="text" name="login" id="login">
    <br>
    <br>

    <label for="pass">Пароль</label>
    <input type="text" name="pass" id="pass">
    <br>
    <br>

    <label for="age">Возраст</label>
    <input type="text" name="age" id="age">
    <br>
    <br>


    <input type="submit" value="Отправить">
    <br>
    <br>

    <a href="1.php">Очистка</a>
</form>
