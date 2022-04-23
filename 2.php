<?php

/** Возвращает количество вызовов самой себя
 * @return int - количество вызовов функции
 */

function getStatic(): int
{
    static $countStatic = 0;
    $countStatic += 1;

    return $countStatic;
}

echo getStatic();