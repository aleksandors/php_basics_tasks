<h4>используя аргументы функции -  три целых числа, определить,
    имеется ли среди них хотя бы одна пара равных между собой чисел.
    Если такая пара существует, вывести на экран числа через пробел.
    Если все три числа равны между собой, то вывести все три.</h4>
<?php
function argument($a, $b, $c) {
    if ($a == $b && $a == $c && $b == $c) {
        echo $a.'-'.$b.'-'.$c;
    }elseif ($a == $b) {
        echo $a.'-'.$b;
    }elseif ($a == $c) {
        echo $a.'-'.$c;
    }elseif ($b == $c) {
        echo $b.'-'.$c;
    }else {echo 'переменные не равны между собой';}
}
argument(2,25,255);