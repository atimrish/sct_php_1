<?php

$array = [

    ['name' => 'Стул1', 'price' => 20, 'category' => 1],
    ['name' => 'Стул2', 'price' => 210, 'category' => 2],
    ['name' => 'Стул3', 'price' => 15, 'category' => 2]

];

for ($i = 0; $i < count($array); $i++)
{
    for ($j = 0; $j < count($array); $j++)
    {
        if ($array[$i]['price'] < $array[$j]['price'])
        {
            swap($array[$i], $array[$j]);
        }
    }
}

echo '<pre>';
print_r($array);
echo '</pre>';


function swap(&$a, &$b)
{
    $c = $a;
    $a = $b;
    $b = $c;
}
