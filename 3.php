<?php

/** Повышает значение температуры
 * @param float $temp - температура
 * @param float $value - число, на которое увеличится температура
 * @return void
 */

function up(float &$temp, float $value)
{
    $temp += $value;
}


/** Понижает значение температуры
 * @param float $temp - температура
 * @param float $value - число, на которое уменьшится температура
 * @return void
 */

function down(float &$temp, float $value)
{
    $temp -= $value;
}

$t = 15;
echo $t . '<br>';

up($t, 14);
echo $t . '<br>';

down($t, 3);
echo $t . '<br>';
