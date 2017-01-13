<?php
ini_set('display_errors',0);
$s = $_GET['stroka1'];
$t = $_GET['stroka2'];
if ($_GET['sumb']) {$h = 'км/ч';}
if ($_GET['sumb1']) {$h = 'м/с';}

function speed($way, $Moving_time)
{
    if ($_GET['sumb']) return $way/$Moving_time;
    if ($_GET['sumb1']) return ($way*1000)/($Moving_time*3600);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Задание 4</title>
</head>
<h3>Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c.
    Исходные данные: Пройденный путь - S; Время движения - t.
    Представить решение задачи с помощью одной функции.</h3>
<div style="width: 50%; margin: 0 auto">
<form action="" method="get">
    <label>Пройденный путь в км</label><br>
    <input type="text" name="stroka1" value="<?=$s;?>"/><br>
    <label>Время движения в часах</label><br>
    <input type="text" name="stroka2" value="<?=$t;?>"/><br><br>
    <input type="submit" name="sumb" value="Подсчитать в км/ч" />
    <input type="submit" name="sumb1" value="Подсчитать в м/с" />
</form>
<h2>скорость движения машины: <?=speed($s, $t);?> <?=$h;?></h2>
</div>
</body>
</html>