<h3>Реализовать функцию checkInterval. функцию должна проверять попало ли целое число в интервал от 50 до 100</h3>
<?php

$arr = array_combine(range(0,50),range(50,100));
$a = 55;
function checkInterval($arr1, $a1) {
    $i = false;
    foreach ($arr1 as $item=>$value) {
        if ($a1 == $value)  $i=true;
    }
    if ($i == true) echo 'Число а  содержится в интервале';
    else echo 'Число а не содержится в интервале';
}


checkInterval($arr, $a);