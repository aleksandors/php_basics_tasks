<p>Напишите функцию, которая отнимает от первого числа второе и делит на третье.</p>
<?php
function trichisla($chislo1,$chislo2,$chislo3){
    return ($chislo1 - $chislo2) / $chislo3;
    }
$a = 100;
$b = 4;
$c = 3;
echo trichisla($a,$b,$c);