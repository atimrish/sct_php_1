<?php

function getInfo(string $name,  $age = null, string $address = null) : string
{
    $total = 'Имя: ' . $name;

    if(!is_null($age)) {

        if (is_int($age)) {
            $total .= ' Возраст: ' . $age;
        } else if (is_string($age)) {
            $total .= ' Адрес: ' . $age;
        }

    }

    if(!is_null($address)) {
        $total .= ' Адрес: ' . $address;
    }

    return $total;
}


echo getInfo('Andrew', 1, 'a');