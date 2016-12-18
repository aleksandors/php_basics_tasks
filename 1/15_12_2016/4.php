<p>Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.</p>
<p>столбец ключей</p>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key=>$value) {
    echo $key;
    echo "<br>";
}
?>
<p>столбец элементов</p>
<?php
foreach ($arr as $key=>$value) {
    echo $value;
    echo "<br>";
}
