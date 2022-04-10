<?php
// Task1
function task1(array $arg_1, bool $arg_2)
{
  if ($arg_2 === true) {
    $acc = '';
    
    for ($i = 0; $i < count($arg_1); $i++) {
      $acc = $acc . ' ' . $arg_1[$i];
    };
    
    return $acc;
  }

  for ($i = 0; $i < count($arg_1); $i++) {
    echo '<p>';
      echo $arg_1[$i];
    echo '</p>';
  }
}

// Task 2
function task2 (string $operation, float ...$numbers)
{
  $acc = '';

  switch ($operation) {
    case("+"):
        foreach ($numbers as $number) {
            $acc += $number;
        }
        break;
    case("-"):
        foreach ($numbers as $number) {
            $acc -= $number;
        }
        break;
    case("*"):
        foreach ($numbers as $number) {
            $acc *= $number;
        }
        break;
    case("/"):
        foreach ($numbers as $number) {
            $acc /= $number;
        }
        break;
    case("%"):
        foreach ($numbers as $number) {
            $acc %= $number;
        }
        break;
    default:
        echo "Неправельные данные";
  }

  echo $acc;
};

// Task 3
function task3 (int $arg1, int $arg2)
{
  if(isset($arg1) && isset($arg2)) {
    
    echo '<table>';
    for ($i = 1; $i <= $arg1; $i++) {
      echo '<tr>';
        for ($j = 1; $j <= $arg2; $j++) {
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

  } else {
    echo 'числа не переданы';
  }
}

// Task 6
function task6 (string $nameFile)
{
    $fp = fopen($nameFile, 'r');
    $str = '';
    
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    
    echo $str;

}