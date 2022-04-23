<?php

/** Возвращает количество вызовов самой себя
 * @return int - количество вызовов функции
 */

function getGlobal(): int
{
    global $countGlobal;

    $countGlobal += 1;

    return $countGlobal;
}

echo getGlobal();