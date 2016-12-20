<?php

function fizzbuzz($f, $b, $n) {
    foreach (range(1, $n) as $number) {
        if(!($number % $f) && !($number % $b)) {
            $res[] = "FB";
        } elseif(!($number % $f)) {
            $res[] = "F";
        } elseif(!($number % $b)) {
            $res[] = "B";
        } else $res[] = $number;
    }
    return implode(" ", $res);
}

echo fizzbuzz(2, 5, 18);