<h4>Используя аргумент функции -  целое число. Вывести на экран его строку-описание следующего вида:
    «отрицательное четное число» - если число отрицательное и четное,
    «отрицательное нечетное число» - если число отрицательное и нечетное,
    «нулевое число» - если число равно 0,
    «положительное четное число» - если число положительное и четное,
    «положительное нечетное число» - если число положительное и нечетное.</h4>
<?php
function opisanie ($a) {
    if ($a == 0) {
        echo 'нулевое число';
    }elseif ($a%2 == 0 && $a<0) {
        echo 'отрицательное четное число';
    }elseif ($a%2 != 0 && $a<0) {
        echo 'отрицательное нечетное число';
    }elseif ($a%2 == 0 && $a>0) {
        echo 'положительное четное число';
    }elseif ($a%2 != 0 && $a>0) {
        echo 'положительное нечетное число';
    }
}
opisanie(-59);