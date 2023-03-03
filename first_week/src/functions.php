<?php

function echoString($array, $return = false){
    $string = '';
    if ($return){
        for($i = 0; $i <  count($array); $i++){
            echo '<p>' . $string = $array[$i] . '</p>';
        }
    } else{
        for($i = 0; $i < count($array); $i++){
            $string = $string . $array[$i];
        }
        return $string;
    }
}

function calcEverything($mathAction, ...$args){
    $result = 0;
    if (count($args) < 2){
        echo '<p style="color:#ff0000;">Warning! You must enter more arguments!</p>';
    } else {
        switch ($mathAction){
            case '*':
                $result = 1;
                foreach ($args as $arg) {
                    $result *= $arg;
                }
                echo $result;
                break;
            case '-':
                $result = $args[0] * 2;
                foreach ($args as $arg) {
                    $result -= $arg;
                }
                echo $result;
                break;
            case '+':
                foreach ($args as $arg) {
                    $result += $arg;
                }
                echo $result;
                break;
            case '/':
                $result = $args[0];
                for ($i = 1; $i < count($args); $i++) {
                    $result = $result / $args[$i];
                }
                echo $result;
                break;
            default:
                echo '<p style="color:#ff0000;">Warning! You must enter the math action sign!</p>';
        }
    }
}

function multiplicationTable($intOne, $intTwo){
    if (is_int($intOne) && is_int($intTwo)){
        echo '<table>';
        for ($a = 1; $a <= $intOne; $a++) {
            echo '<tr>';
            for ($b = 1; $b <= $intTwo; $b++) {
                $value = $a * $b;
                if (($a % 2) == 0) {
                    echo '<td style="padding: 5px;border: solid 1px #999999; text-align: center;">' . $value . '</td>';
                } else {
                    echo '<td style="padding: 5px;border: solid 1px #999999; text-align: center;">' . $value . '</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p style="color:#ff0000;">Warning! You must enter two integers!</p>';
    }
}

function unixTime(){
    echo '<br> Today: ' . date("d-m-Y H:i:s");
    echo '<br> Unixtime 24.02.2016 00:00:00: ' . mktime(0, 0, 0, 02,   24,   2016) . '<br>';
}

function strFunctions(){
    $firstString = 'Карл у Клары украл Кораллы';
    $secondString = 'Две бутылки лимонада';
    $letter = ['к', 'К'];
    echo mb_strtolower($firstString) . '<br>'; // Приведение к нижнему регистру
    echo str_replace($letter, '', $firstString) . '<br>'; //Полное удаление буквы К
    echo str_replace('Две', 'Три', $secondString) . '<br>';
}

function makeReadFile(){
    fopen('test.txt', 'w+');
    file_put_contents('test.txt', 'Hello again!');
    $content = file_get_contents('test.txt');
    echo $content;
}
//Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
//Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.