<?php

$students = [
	[
		'name' => 'Алексей Визуально-Новэльный',
		'age' => 22,
	],
	[
		'name' => 'Мария Эдуардовна',
		'age' => 20,
	],
	[
		'name' => 'Дмитрий Мэдвэдэв',
		'age' => 23,
	],
];

$translate = [
	'name' => 'Имя',
	'age' => 'Возраст',
];

foreach($students as $student) {
    foreach($student as $key => $value) {
        print("{$translate[$key]}: {$value}<br>");
    }
    print('<br>');
}