<h4>Используя аргумент функции - целое число(год), определить количество дней в году.
    Результат вывести на экран в следующем виде:
    "количество дней в году: x", где х - 366 для високосными года, х - 365 для обычного года.</h4>
<?php
$god = 2021;
function god_visokosnyi($a) {
    if ($a%4 == 0 || $a%400 == 0) {
        return true;
    }
    else {
        return false;
    }
}
function kol_dney($a) {
    if (god_visokosnyi($a)) {
        echo 'количество дней в году: 366';
    }
    else {echo 'количество дней в году: 365';}
}
kol_dney($god);