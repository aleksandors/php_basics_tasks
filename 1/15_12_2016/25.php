<p>Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.</p>
<?php
$min = rand(10, 55);
$max = rand(56, 100);
$a = range($min, $max);
print_r($a);
echo '<br>';
foreach($a as $el) {
    if($el >= $max) {
        echo "Максимальное чило массива - " . $el;
        echo "<br>";
        $b = $max;
    }
    elseif($el <= $min) {
        echo "Минимальное число массива - " . $el;
        echo "<br>";
        $c = $min;
    }
    else continue;
}
$a[$max-$min]=$c;
$a[0]=$b;
echo "<br>";
echo "<br>";
print_r($a);