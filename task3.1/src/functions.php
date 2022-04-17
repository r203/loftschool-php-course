<?php
// Task 3
$arrUsers = array();
$arrNames = [
  'Stepan', 'Makar', 'Afanasii', 'Ippolit', 'Jakov'
];

for ($i = 1; $i <= 50; $i++)
{
  $id = $i;
  $name = $arrNames[rand(0, 4)];
  $age = rand(18, 45);

  $user[$i] = [
    'id' => $id,
    'name' => $name,
    'age' => $age,
  ];

  array_push($arrUsers, $user[$i]);
}

$json = json_encode($arrUsers);
file_put_contents('src/users.json', $json);

$newArrUsers = json_decode(file_get_contents('src/users.json'), true);

// Выводим количество пользователей с каждым именем в массиве
echo '<pre>';
var_dump(array_count_values(array_column($newArrUsers, 'name'))); 

// Выводим средний возраст пользователей
for ($i = 0; $i <= count($newArrUsers); $i++)
{
  $acc += (int) $newArrUsers[$i]['age'];
}

echo $acc / count($newArrUsers);