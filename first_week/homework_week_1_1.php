<?php
// task 1
$name = 'Andrey';
$age = 41;

echo 'Меня зовут: ' . $name;
echo '<br>';
echo "Мой возраст $age год";
echo '<br>';
echo '"!|/\'"\\';
echo '<br>' . '<br>';

// task 2
const ALL_DRW = 80;
const MARKER_DRW = 23;
define('PENCIL_DRW', 40);
const PAINT_DRW = ALL_DRW - MARKER_DRW - PENCIL_DRW;
echo '<br>';
echo PAINT_DRW;

// task 3
$age = mt_rand(1, 98);
echo '<br>' . $age . '<br>';
if (18 <= $age && $age<= 65) {
    echo 'Вам еще работать и работать';
} elseif (1 <= $age && $age<= 17) {
    echo 'Вам ещё рано работать';
} elseif (65 < $age && $age<= 120) {
    echo 'Вам пора на пенсию';
} else {
    echo 'Неизвестный возраст';
}
echo '<br>' . '<br>';

// task 4
$day = mt_rand(1, 32);
echo '<br>' . $day . '<br>';

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день' . '<br>';
        break;
    case 6:
    case 7:
        echo 'Это выходной день' . '<br>';
        break;
    default:
        echo "Неизвестный день";
}
echo '<br>' . '<br>';

// task 5
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];
$toyota = [
    'model' => 'Camry',
    'speed' => 120,
    'doors' => 4,
    'year' => '2017'
];
$opel = [
    'model' => 'Astra',
    'speed' => 110,
    'doors' => 5,
    'year' => '2005'
];

$carsBase = [ 'bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

function printArray($array) {
    $carBrands = array_keys($array);
    for ($i = 0; $i < count($carBrands); $i++){
        $carBrand = $carBrands[$i];
        echo 'Car: ' . $carBrand . '<br>';
        foreach ($array[$carBrand] as $car => $value){
            echo $car . ': ' . $value . ' ';
        }
        echo '<br>' . '<br>';
    }
}
printArray($carsBase);

// task 6
echo '<table>';
for ($a = 1; $a < 11; $a++) {
    echo '<tr>';
    for ($b = 1; $b < 11; $b++) {
        $value = $a * $b;
        if (($a % 2) == 0) {
            echo '<td style="padding: 5px;"> ( ' . $value . ' ) </td>';
        } else {
            echo '<td style="padding: 5px;"> [ ' . $value . ' ] </td>';
        }
    }
    echo '</tr>';
}
echo '</table>';