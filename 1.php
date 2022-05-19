<?php

$months = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];

if (!empty($_POST['btn'])) :


?>

    <style>

        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }

    </style>

<table>
    <tr><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Пол</td><td>Место рождения</td>
        <td>Дата рождения</td><td>Месяц</td><td>Год</td><td>Email</td><td>Гражданство</td></tr>
    <tr>
        <td><?= $_POST['surname'] ?></td>
        <td><?= $_POST['name'] ?></td>
        <td><?= $_POST['lastname'] ?></td>
        <td><?= $_POST['gender'] ?></td>
        <td><?= $_POST['place'] ?></td>
        <td><?= $_POST['date'] ?></td>
        <td><?= $_POST['month'] ?></td>
        <td><?= $_POST['year'] ?></td>
        <td><?= $_POST['email'] ?></td>
        <td><?= $_POST['country'] ?></td>
    </tr>

</table>

<?php endif; ?>

<form action="" method="post">

    <label for="surname">Фамилия</label>
    <input type="text" name="surname" id="surname" required>
    <br>
    
    <label for="name">Имя</label>
    <input type="text" name="name" id="name" required>
    <br>
    
    <label for="lastname">Отчество</label>
    <input type="text" name="lastname" id="lastname" required>
    <br>

    <label for="gender">Пол</label>
    <select name="gender" id="gender">

        <option value="Мужской">Мужской</option>
        <option value="Женский">Женский</option>
        
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

        ?>
        
    </select>
    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <br>


    <label for="country">Гражданство</label>
    <select name="country" id="country">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br>

    <input type="submit" value="Отправить" name="btn">
    <br>

</form>
