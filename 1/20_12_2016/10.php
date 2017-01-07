<h3>Напишите функцию, которая принимает параметром строку, а возвращает первые N символов этой строки (N – это второй параметр). Функция должна добавлять троеточие в конце возвращаемой строки. Функция должна корректно работать с кириллицей.</h3>
<?php
$str = "kkkkkkkkkk";
$N = 5;
function stroka($a, $b) {
    $arr1 = str_split($a);
    $arr2 = array();
    foreach ($arr1 as $key=>$value) {
        if ($key < $b) {
            $arr2[$key] = $value;
        }
    }
    return $arr2;
}

foreach (stroka($str, $N) as $key=>$value) {
    echo $value;
}
