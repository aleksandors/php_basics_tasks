<p>Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза</p>

<?php
# Число
$number = 442158755745;
# Искомая цифра
$search = 4;
# Считаем
$count = substr_count( $number, $search );
echo 'Цифра ' . $search . ' встречается в числе ' . $number . ' <b>' . $count . '</b> раз(а)';
