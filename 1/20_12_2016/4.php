<?php


function maincount() {
    $stroka1 = $_GET["stroka"];
    $arr = str_split($stroka1);
    foreach ($arr as $key=>$value) {}
    return $key+1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Задание 4</title>
</head>
<body>
<h3>Напишите аналог функции count (аналог - это значит можно пользоваться чем угодно, кроме функции count).</h3>
<p>count — Подсчитывает количество элементов массива или что-то в объекте</p>
<form action="" method="get">
    <label>Введите строку</label><br>
    <input type="text" name="stroka" /><br>
    <input type="submit" name="sumb" value="Подсчитать" />
</form>
<p>Строка содержит:<?=maincount();?>символа</p>

</body>
</html>


