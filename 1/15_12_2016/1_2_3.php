<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.12.2016
 * Time: 22:16
 */
$name = "Александр";
$age=46;
echo "Меня зовут $name </br>";
echo "Мне $age лет </br>";
if ($age>=18 && $age<=59) {
    echo "Вам еще работать и работать </br>";
}
elseif ($age>59) {
    echo "Вам пора на пенсию </br>";
}elseif ($age<18 && $age>0) {
    echo "Вам еще рано работать </br>";
}
elseif ($age<0 || $age != [1-9][0-9])  {
    echo "Неизвестный возраст </br>";
}
$day = 7;
switch ($day) {
    case 1:
        echo "Это рабочий день </br>";
        break;
    case 2:
        echo "Это рабочий день </br>";
        break;
    case 3:
        echo "Это рабочий день </br>";
        break;
    case 4:
        echo "Это рабочий день </br>";
        break;
    case 5:
        echo "Это рабочий день </br>";
        break;
    case 6:
        echo "Это выходной день </br>";
        break;
    case 7:
        echo "Это выходной день </br>";
        break;
    default:
        echo "Неизвестный день </br>";
        break;
}
$s = 75;
$t = 3;
echo "скорость автомобиля на заданном участке". $s/$t. "км/час </br>";
echo "скорость автомобиля на заданном участке". ($s*1000)/($t*60*60). "м/с </br>";
$foo = "bar";
$bar = 10;
echo $$foo."</br>";
$a = 24;
$b = 29;
$operator = "*";
switch ($operator) {
    case "+":
        echo $a + $b;
        echo "</br>";
        break;
    case "-":
        echo $a - $b;
        echo "</br>";
        break;
    case "/":
        if ($b==0) {
            echo "на 0 делить нельзя";
            break;
        }
        else {
            echo $a / $b;
            echo "</br>";
            break;
        }
    case  "*":
        echo $a*$b;
        echo "</br>";
    case "%":
        echo $a%$b;
        echo "</br>";
}
function ab ($a,$b) {
    if ($a>$b) {
        echo $a;
        echo "</br>";
    }
    else {
        echo $b;
        echo "</br>";
    }
}
echo ab($a,$b);
echo "</br>";
$a="78";
$b=78;
if ($a==$b) {
    echo "равны";
    echo "</br>";
}
else {
    echo "не равны";
    echo "</br>";
}
if ($a===$b) {
    echo "эквивалентны";
    echo "</br>";
}
else {
    echo "не эквивалентны";
    echo "</br>";
}
$a = 24;
$b = 29;
    if ($a>$b) {
        var_dump($a);
        echo "</br>";
    }
    else {
        var_dump($b);
        echo "</br>";
    }
var_dump((bool)20);
echo "---При преобразовании в boolean, число integer 0 (ноль) рассматриваются как FALSE Все остальные значения рассматриваются как TRUE";
echo "</br>";
var_dump((bool)0);
echo "---При преобразовании в boolean, число integer 0 (ноль) рассматриваются как FALSE Все остальные значения рассматриваются как TRUE";
echo "</br>";
var_dump((bool)-20);
echo "---При преобразовании в boolean, число integer 0 (ноль) рассматриваются как FALSE Все остальные значения рассматриваются как TRUE";
echo "</br>";
echo "вывод строки с помощью echo</br>";
print "вывод строки с помощью print</br>";

// - однострочный комментарий
# - это тоже однострочный комментарий
/*
многострочный
комментарий
*/
define('DAYS_COUNT',7);
echo  DAYS_COUNT;
echo "</br>";
const MONTH_COUNT = 12;
echo MONTH_COUNT ;
echo "</br>";
echo "</br>";
echo "</br>";
/*
$t=0;
while ($t<100){
    $t++;
    echo $t ."<br>";
}

$d=1;
do {
    if ($d%2) {
        echo $d."<br>";
    }
    $d++;
}
while ($d<20);

for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);

echo $i.'<br>';
echo $num;

$from = 1;
$to = 1000;
$from = 1;
$to = 10000;
for ($c = $from; $c <= $to; $c++) {
    for ($i = 2; $i < $c; $i++) {
        if ($c % $i == 0) continue 2;
    }
    echo "$c ";
}
*/
$a = array(1, 2, 3, 17);

$i = 0; /* только для пояснения */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}
echo "<br>";
var_dump($v);