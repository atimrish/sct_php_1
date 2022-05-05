<?php

$array = [

    'Телефоны' => ['IPhone', 'Xiaomi'],
    'Мебель' => ['Стулья', 'Столы', 'Диваны'],
    'Товары для автомобиля' => ['888']

];

foreach ($array as $key => $value) {

    echo $key . '<br>';
    foreach ($value as $subValue) {
       echo '&emsp;&emsp;&emsp;&emsp;' . $subValue . '<br>';
    }

}
