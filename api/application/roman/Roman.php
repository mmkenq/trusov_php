<?php


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
define('C', 100);
define('D', 500);
define('M', 1000);

$rim_num = 's';

function toRoman($number){
    
    $num = $number;
    
    if($num < M){
        if($num < D){
            if($num < C){
                if($num < L){
                    if($num < X){
                        if($num < V){
                            if($num < I){
                                return '';
                            }
                            else if($num == 4){
                                return $rim_num = 'IV';
                            }
                            else {
                                $rim_num = $rim_num.'I';
                                $num = $num - 1;
                            };
                        }
                        else if($num == 9){
                            return $rim_num = 'IX';
                        }
                        else {
                            $rim_num = $rim_num.'V';
                            $num = $num - 5;
                        };
                    }
                    else if($num >= 40){
                        $rim_num = 'XL';
                        $num = $num - 40;
                    }
                    else {
                        $rim_num = $rim_num.'X';
                        $num = $num - 10;
                    };
                }
                else if($num >= 90){
                    $rim_num = 'XC';
                    $num = $num - 90;
                }
                else {
                    $rim_num = $rim_num.'L';
                    $num = $num - 50;
                };
            }
            else if($num >= 400){
                $rim_num = 'CD';
                $num = $num - 400;
            }
            else {
                $rim_num = $rim_num.'C';
                $num = $num - 100;
            }
        }
        else if($num >= 900){
            $rim_num = 'CM';
            $num = $num - 900;
        }
        else {
            $rim_num = $rim_num.'D';
            $num = $num - 500;
        }
    }
    else {
        $rim_num = $rim_num.'M';
        $num = $num - 1000;
    }

    return $rim_num.toRoman($num);
}


// for($i = 1; $i <= 4100; $i++){
//     print_r($i." in RIM: ".toRoman($i)."\r\n<br>");
// }
