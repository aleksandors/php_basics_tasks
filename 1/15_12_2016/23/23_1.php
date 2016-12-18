<?php
$count1 = $_GET['count1'];


$number = $count1;
$array = array();
while ($number > 0) {
    $array[] = $number % 10;
    $number = intval($number / 10);
}
$array = array_reverse($array);
$razmer=count($array);
$rezultat=0;
$i=0;
for ($i=0;$i<$razmer;$i++) {
    $rezultat+=$array[$i];
}
echo $rezultat;
