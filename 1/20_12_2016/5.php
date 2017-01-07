<?php
$num = $_GET["num"];
function mainum($a) {
    $num = $_GET["num"];
    if ($num%2==0) {
        return "Четное";
    }
    else {
        return "Не четное";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Задание 5</title>
</head>
<body>
<h3>Напишите функцию, которая принимает параметром число и проверяет четное оно или нет.</h3>
<p>Проверка числа на четность</p>
<form action="" method="get">
    <label>Введите число</label><br>
    <input type="text" name="num" value="<?=$num;?>"/><br><br>
    <input type="submit" name="sumb" value="определить" />
</form>
<p>Число-<b><?=mainum($num);?></b></p>
</body>
</html>
