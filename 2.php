<?php

$arr = [rand(-100, 100), rand(-100, 100), rand(-100, 100)];

arraySort($arr);

outArray($arr);




function arraySort(&$arr) {

    for ($i = 0; $i < count($arr); $i++) {

        for ($j = $i; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {

                Swap($arr[$i], $arr[$j]);

            }
        }

    }

}

function Swap(&$a, &$b) {
    $c = $b;
    $b = $a;
    $a = $c;
}

function outArray($array) {
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . '<br>';
    }
}