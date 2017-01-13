<h3>Напишите функцию, которая реализует алгоритм 'решето Эратосфена' </h3>
<?php
function recheto()
{

    define("LIMIT", 100); //записуем константу LIMIT
    define("SQRT_LIMIT", floor(sqrt(LIMIT))); // записуем константу SQRT_LIMIT

    $S = array_fill(2, LIMIT - 1, true); //заполгяем массив

    for ($i = 2; $i <= SQRT_LIMIT; $i++) {
        if ($S[$i] === true) {
            for ($j = $i * $i; $j <= LIMIT; $j += $i) {
                $S[$j] = false;
            }
        }
    }
    return $S;
}
echo '<pre>';
print_r(recheto());