<?php
require('src/functions.php');

$arr = [
  'first sentence',
  'second sentence',
  'third sentence',
];

task1($arr, true);

task2('+', 1, 2, 3, 5.2);

task3(4, 6);

// Task 4
echo date("d.m.Y h:i");
echo strtotime("24.02.2016 00:00:00");

// Task 5
$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string);

$string2 = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string2);

// Task 6
$fp = fopen("test.txt", "w");
fwrite($fp, 'Hello again!');
fclose($fp);

task6('test.txt');