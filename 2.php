<?php

function minOf($first, $second, $third = null): int
{

    if (is_null($third)) {

        if (!is_int($first)) {
            $first = (int)$first;
        }

        if (!is_int($second)) {
            $second = (int)$second;
        }

        if ($first < $second) {
            return $first;
        } else {
            return $second;
        }
    } else {

        if (!is_int($third)) {
            $third = (int)$third;
        }

        if ($first < $second && $first < $third) {
            return $first;
        } else if ($second < $first && $second < $third) {
            return $second;
        } else {
            return $third;
        }

    }

}

echo minOf('1', '3', 2);