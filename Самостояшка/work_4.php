<?php

// Создание массива
$numbers = [1, 2, 3, 4, 5, 6, 4, 5, 2, 3];

$uniq = array_unique($numbers);

foreach($uniq as $number) {
    print("{$number}<br>");
}