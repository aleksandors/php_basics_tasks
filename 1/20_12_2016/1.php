<h3>Дан массив с элементами 'a', 'b', 'c', 'd', 'e'. С помощью функции array_map сделайте из него массив 'A', 'B', 'C', 'D', 'E'.</h3>
<?php
$arr = array('a','b','c','d','e');
print_r($arr);
echo '<br>';
function registr(array &$arr1) {
    foreach ($arr1 as $key=>$value) {
        $arr1[$key] = mb_convert_case($value,MB_CASE_UPPER);
    }
    return $arr1;
}
print_r( registr($arr));
echo '</br></br>';
foreach ($arr as $key=>$value) {
    echo $value.',';
}
