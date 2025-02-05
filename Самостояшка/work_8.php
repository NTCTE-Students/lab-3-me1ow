<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

sort($numbers);
foreach($numbers as $number) {
    print("{$number}⬆ <br>");
}
rsort($numbers);
foreach($numbers as $number) {
    print("{$number}⬇ <br>");
}