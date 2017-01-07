<h3>Напишите функцию, которая находит разницу между двумя датами: количество лет, месяцев, дней, часов, минут, секунд. Результат должен выводиться в виде массива с ключами y, m, d, h, i, s.</h3>
<?php

$date1 = new DateTime("2007-03-24 15:10:15");
$date2 = new DateTime("2011-06-26 14:10:15");
$interval = $date1->diff($date2);
echo "Разница: " . $interval->y . " лет, " . $interval->m." месяцев, ".$interval->d." дней," .$interval->h."часов,".$interval->i."минут,".$interval->s."секунд";
echo '<br>';
echo '<pre>';
print_r($interval);