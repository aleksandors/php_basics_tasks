<h3>Напишите функцию, которая будет находить корни квадратного уравнения.</h3>
<?php
/*
function eq_roots($a, $b, $c) {
    if ($a==0) return false;

    if ($b==0) {
        if ($c<0) {
            $x1 = sqrt(abs($c/$a));
            $x2 = sqrt(abs($c/$a));
        } elseif ($c==0) {
            $x1 = $x2 = 0;
        } else {
            $x1 = sqrt($c/$a).'i';
            $x2 = -sqrt($c/$a).'i';
        }
    } else {
        $d = $b*$b-4*$a*$c;
        if ($d>0) {
            $x1 = (-$b+sqrt($d))/2*$a;
            $x2 = (-$b-sqrt($d))/2*$a;
        } elseif ($d==0) {
            $x1 = $x2 = (-$b)/2*$a;
        } else {
            $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
            $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
        }
    }
    return array($x1, $x2);
}
echo '<pre>';
print_r(eq_roots(2,5,10));

*/

$a = 12;
$b = 2;
$c = -18;

if ($a==0) {

    echo "Это не квадратное уравнение";

} else {

    $d=$b*$b-4*$a*$c;

}

if ($d<0) {

    echo 'Решений нет, поскольку D<0';

} else {
    $d=sqrt($d);
    $x1=((-$b)+$d)*2*$a;
    $x2=((-$b)-$d)*2*$a;
    //echo 'x1=,$x1,'.'<br>';
    //echo 'x2=$x2';
}
echo $d;