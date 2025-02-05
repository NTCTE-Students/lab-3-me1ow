<?php

$stroka = "Съешь ещё этих мягких французских булок, да выпей же чаю.";
$uniq = explode(" ",$stroka);

foreach($uniq as $number) {
    print("- {$number}<br> <br>");
}