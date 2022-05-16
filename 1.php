<?php

$months = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];

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
    <select name="date" id="date">
        <?php

            for ($i = 1; $i < 32; $i++) {
                echo "<option value='$i'>$i</option>";
            }

        ?>
    </select>
    <br>


    <label for="month">Месяц</label>
    <select name="month" id="month">

        <?php

        foreach ($months as $key => $value)
        {
            echo "<option value='$value'>$value</option>";
        }

        ?>

    </select>
    <br>


    <label for="year">Год</label>
    <select name="year" id="year">

        <?php

        for($i = 1910; $i < 2022; $i++)
        {
            echo "<option value='$i'>$i</option>";
        }


//        if (!empty($_POST['btn']))
//        {
//
//
//
//        }



        ?>
        
    </select>
    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>


    <label for="country">Гражданство</label>
    <input type="text" name="country" id="country">
    <br>

    <input type="submit" value="Отправить" name="btn">
    <br>

</form>
