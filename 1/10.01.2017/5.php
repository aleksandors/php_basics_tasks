<h3>Написать функцию, определяющую является ли переданная в неее строка  палиндромом</h3>
<?php

function isPalindrome($text) {


    $text = mb_strtolower($text);/*перевод в нижний регистр*/
    $text = trim($text);/*убираем пробелы в тексте*/

    $length     = mb_strlen($text);/*получаем длину строки*/
    $halfLength = floor($length / 2);/*округляем
                      дробное число в меньшую сторону до целого*/
    $lastCharIndex = $length - 1;
    for ($i = 0; $i <= $halfLength; $i ++) {

        if ($text[$i] != $text[$lastCharIndex - $i]){
            return false;
        }
        return true;
    }
}


$result = 'палиндромом';
if (isPalindrome('12344321'))
    echo 'строка является ';
else
    echo 'строка не является ';
echo $result;

