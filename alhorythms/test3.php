<?php

function rotateLeft($d, $arr) {
    foreach ($arr as $index => $val) {
        if ($index === (count($arr) - $d)) {
            break;
        }

        array_unshift($arr, array_pop($arr));
    }

    return $arr;
}
