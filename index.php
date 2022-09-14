<?php

// $obj = new stdClass();
// $obj->name = 'Masha';
// $obj->val = 123;
// print_r($obj);


// Написать 2 функции
// 1 переводит 10тичное число в римских цифрах
// 2 функция - наоборот
// числа целые неотрицательные 0-10000

// *задание со звездочкой
// написать общую функцию (с флагом)

// **
// значение числа подбирать из адресной строки
define('I', 1);
define('V', 5);
define('X', 10);
define('L', 50);
$rim_num = 's';

function toRIM($number){
    
    $num = $number;

    if($num < L){
        if($num < X){
            if($num < V){
                if($num < I){
                    return '';
                }
                else {
                    $rim_num = $rim_num.'I';
                    $num = $num - 1;
                };
            }
            else {
                $rim_num = $rim_num.'V';
                $num = $num - 5;
            };
        }
        else {
            $rim_num = $rim_num.'X';
            $num = $num - 10;
        };
    }
    else {
        $rim_num = $rim_num.'L';
        $num = $num - 50;
    };

    return $rim_num.toRIM($num);
}


for($i = 1; $i<=55; $i++){
    print_r($i." in RIM: ".toRIM($i)."\r\n<br>");
}
