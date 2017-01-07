<p>Напишите функцию, которая возвращает куб числа. Число передается параметром.</p>
<?php
function cub($number) {
    return $number*$number*$number;
}
$a = 2;
echo cub($a);
