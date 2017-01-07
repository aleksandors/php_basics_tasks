<h3>Напишите функцию, которая принимает параметром массив, а возвращает четные элементы этого массива.</h3>
<?php
$arr = array(1,5,6,8,9,11,12,14,15,17,18,32,33,38,41);

function chet_arr(array $masiv) {
    if (array($masiv)) {
        $masiv1 = array();
        foreach ($masiv as $key=>$value) {
            if ($value%2 == 0) {
                $masiv1[$key] = $value;
            }
        }
        return $masiv1;
    }
    else {
        echo "Переменная не является массивом";
    }
}

foreach (chet_arr($arr) as $key=>$value) {
    echo $value.",";
}
