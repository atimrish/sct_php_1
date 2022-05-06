<?php

$arr1 = [2,3,4,7];
$arr2 = [5,8,4,2,9];

foreach ($arr1 as $key => $value)
{
    if(check($value, $arr2))echo $value . ' ';
}

echo '<br>';

foreach ($arr2 as $key => $value)
{
    if(check($value, $arr1)) echo  $value . ' ';

}


/** - Проверяет есть ли в массиве значение, равное переменной $a
 * @param $a - переменная с которой сравнивают массив $arr
 * @param array $arr - массив
 * @return bool
 */
function check($a ,array $arr) : bool
{
    foreach ($arr as  $key => $value) {
        if($value === $a)return false;
    }
    return true;
}

