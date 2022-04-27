<?php

/** - Выводит таблицу умножения
 * @return void
 */
function getMultiplicationTable()
{
    echo '<table style="border-collapse: collapse">';

    for ($i = 1; $i < 10; $i++) {
        echo '<tr>';
       for ($j = 1; $j < 10; $j++) {

            $res = $i * $j;
           echo "<td style='border: 1px solid black; padding: 5px; text-align: center'>$res</td>";

       }
        echo '</tr>';
    }


    echo '</table>';
}

getMultiplicationTable();