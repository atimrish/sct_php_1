<?php

if (!empty($_POST['btn'])) {

    $first = (int)$_POST['first'];
    $second = (int)$_POST['second'];


    if (!empty($_POST['action'])) {

        switch ($_POST['action']) {
            case 'add':
                echo $first + $second;
                break;

            case 'subtract':
                echo $first - $second;
                break;

            case 'multiply':
                echo $first * $second;
                break;

            case 'divide':
                if ($second !== 0) {
                    echo $first / $second;
                } else {
                    die('Деление на ноль');
                }
                break;
            default:
                die('Ошибка');
        }

    }

}


?>

<form action="" method="post">

    <label for="first">Первое</label>
    <input type="text" name="first" id="first" value="<?= $first ?>">
    <br>
    <br>

    <label for="action">Действие</label>
    <select name="action" id="action">
        <option value="add" <?php if ($_POST['action'] === 'add') : ?> selected <?php endif; ?> >+</option>
        <option value="subtract" <?php if ($_POST['action'] === 'subtract') : ?> selected <?php endif; ?> >-</option>
        <option value="multiply" <?php if ($_POST['action'] === 'multiply') : ?> selected <?php endif; ?> >*</option>
        <option value="divide" <?php if ($_POST['action'] === 'divide') : ?> selected <?php endif; ?> >/</option>
    </select>
    <br>
    <br>

    <label for="second">Второе</label>
    <input type="text" name="second" id="second" value="<?= $second ?>">
    <br>
    <br>

    <input type="submit" value="Отправить" name="btn">
</form>
