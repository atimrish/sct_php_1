<?php

?>

<form action="" method="post">

    <label for="surname">Фпмилия</label>
    <input type="text" name="surname" id="surname">
    <br>
    
    <label for="name">Имя</label>
    <input type="text" name="name" id="name">
    <br>
    
    <label for="lastname">Отчество</label>
    <input type="text" name="lastname" id="lastname">
    <br>

    <label for="gender">Пол</label>
    <select name="gender" id="gender">

        <option value="man">Мужской</option>
        <option value="woman">Женский</option>
        
    </select>
    <br>

    <label for="place">Место рождения</label>
    <select name="place" id="place">

        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        
    </select>
    <br>

    <label for="date">Дата рождения</label>
    <input type="date" name="date" id="date">

    <label for="month">Месяц</label>
    <input type="month" name="month" id="month">

    <label for="year">Год</label>
    <select name="year" id="year">

        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        
    </select>

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="country">Гражданство</label>
    <input type="text" name="country" id="country">

    <input type="submit" value="Отправить">
    
</form>
