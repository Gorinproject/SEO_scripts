<?php

$keywords  = "
//add keywords
";

$v = preg_split("/\r\n|\n|\r/", $keywords);
print_r($v);

$v2 = rtrim(implode(', ',$v), ',');

echo $v2;


?>