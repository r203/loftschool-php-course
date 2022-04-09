<?php
header('Content-Type: text/html; charset=utf-8');

// Задание 1
$name = 'Artem';
$age = '33';

echo 'Меня зовут: ' . $name;
echo '<br/>';
echo 'Мне ' . $age . ' лет';
echo '<br/>';
echo '“!|/’”\\';

// Задание 2
const PICTURE_ALL = 80;
const PICTURE_MARKERS = 23;
const PICTURE_PENCILS = 40;

$picturePaints = PICTURE_ALL - PICTURE_MARKERS - PICTURE_PENCILS;

var_dump($picturePaints);

// Задание 3
$age = rand(0, 120);

echo $age;
echo '<br/>';

if ($age >= 18 && $age <= 65) {
  echo 'Вам еще работать и работать';
} elseif ($age > 65){
  echo 'Вам пора на пенсию';
} elseif ($age < 18){
  echo 'Вам ещё рано работать';
} else {
  echo 'Неизвестный возраст';
};

// Задание 4
$day = rand(1, 7);

echo $day;
echo '<br/>';

switch ($day) {
  case ($day >= 1 && $day <= 5):
      echo "Это рабочий день";
      break;
  case ($day >= 6 && $day <= 7):
      echo "Это выходной день";
      break;
  default:
      echo "Неизвестный день";
      break;
}

// Задание 5
$bmw = [
  "model" => "X5",
  "speed" => 120,
  "doors" => 5,
  "years" => "2015",
];

$toyota = [
  "model" => "RAV4",
  "speed" => 120,
  "doors" => 5,
  "years" => "2010",
];

$opel = [
  "model" => "ASTRA",
  "speed" => 100,
  "doors" => 3,
  "years" => "2018",
];

$cars = [
  "BMW" => $bmw,
  "Toyota" => $toyota,
  "Opel" => $opel
];

foreach ($cars as $key => $car) { 
  echo 'CAR ' . $key . '<br>'; 
  echo $car['model'] . ' ' . $car['speed'] . ' ' . $car['doors'] . ' ' . $car['year'] . ' ' . "<br><br>"; 
}

// Задание 6
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
  echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td style="width:25px;height:30px;text-align:center;">';
        if(($i % 2) == 0 && ($j % 2) == 0){
            echo '(' . $i * $j . ')';
        }elseif(($i % 2) != 0 && ($j % 2) != 0){
            echo '[' . $i * $j . ']';
        } else {
            echo $i * $j;
        }
        echo '</td>';
    }
  echo '</tr>';
};
echo '</table>';