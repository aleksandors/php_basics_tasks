<p>Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.</p>
<?php
for ($i=1;$i<=9;$i++){
    for ($k=1;$k<=$i;$k++) {
        echo $i;
    }
    echo "<br>";
}
?>