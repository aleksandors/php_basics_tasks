
<p>Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</p>
<?php
$result=0;
$aray = array (1, 20, 15, 17, 24, 35);
foreach ($aray as $value) {
    $result+=$value;
}
echo $result."<br>";