<h3>Напишите функцию, которая возвращает множественное или единственное число существительного</h3>
<?php
$numbr = 12371;
$a = "яблоко";
$b = "яблока";
$c = "яблок";
function format_by ($num, $form1, $form2, $form3) {
    $anum = $num%10;
    if($num>= 11 && $num <= 19)  return $form3;
    elseif ($anum >= 2 && $anum <=4) return $form2;
    elseif ($anum == 1) return $form1;
}

echo $numbr.format_by($numbr, $a, $b, $c);