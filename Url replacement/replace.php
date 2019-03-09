<?php
$string1 = 'https://shop.agromat.ua/TM/TM-santehnika&m=139';
$string2 = 'http://shop.agromat.ua/index.php?categoryID=1001440';

$patterns = array();
$patterns[0] = '/^http:/';
$patterns[1] = '/TM\/TM/';
$patterns[2] = '/-santehnika&m=/';
$patterns[3] = '/[0-9]+$/';
$patterns[4] = '/index.php\?categoryID=/';



$replacements = array();

$replacements[4] = 'https:';
$replacements[3] = '';
$replacements[2] = '';
$replacements[1] = '';
$replacements[0] = '';

echo "<pre>";
echo preg_replace($patterns, $replacements, $string1);
echo "</br>";
echo preg_replace($patterns, $replacements, $string2);
echo "</pre>";
?>