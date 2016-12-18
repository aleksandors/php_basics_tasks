<p>Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
<?php
$result=0;
$aray = array (26, 17, 136, 12, 79, 15);
foreach ($aray as $value) {
    $result+=($value*$value);
}
echo $result."<br>";