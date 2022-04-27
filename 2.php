<?php

/** - Выводит числа от 0 до 10 и показывает четное оно или нет
 * @return void
 */

function evenNumber()
{
    echo '0 - тоже четное число<br>';

    for ($i = 1; $i < 11; $i++) {
        echo $i;

        if ($i % 2 === 0) {
            echo ' - четное<br>';
        } else {
            echo ' - нечетное<br>';
        }

    }
}

evenNumber();
