#!/usr/bin/php
<?php
$str = $argv[1];
$str = explode(" ",$str);
$str1 = $str[0];
unset($str[0]);
foreach($str as $arr_str)
	echo("$arr_str ");
echo $str1;
?>
