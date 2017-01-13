<h3>Реализовать функцию closeToTen. функцию должна выводить на экран ближайшее к 10 из двух чисел,
    записанных в аргументах метода.</h3>
<?php
function closeToTen($a, $b) {
    $i = abs(10-$a);
    $f = abs(10-$b);
    if ($i<$f) {echo $a;}
    elseif ($i>$f) {echo $b;}
    else {echo rand($a,$b);}
}
closeToTen(82,50);