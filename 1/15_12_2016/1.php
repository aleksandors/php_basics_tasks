<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.12.2016
 * Time: 21:02
 */
?>
<p>Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
<?php
$aray = array ('html', 'css', 'php', 'js', 'jq');
foreach ($aray as $value) {
    echo $value."<br>";
}