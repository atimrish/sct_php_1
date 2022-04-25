<?php


/** - функция возвращает строку, содержащие числа от $a до $b
 * @param int $a - первое число
 * @param int $b - второе число
 * @return string - результат
 */
function getString(int $a, int $b): string
{
    $str = '';
    if ($a === $b) {
        $str = 'Числа равны';
    } else if ($a < $b) {

        for ($i = $a; $i <= $b; $i++) {
            $str .= $i;
        }
    } else {
        for ($i = $b; $i <= $a; $i++) {
            $str .= $i;
        }
    }

    return $str;
}


echo getString(1,5);
