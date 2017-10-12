#!/usr/bin/php
<?php
    $str = join(" ",$argv);
    $str = explode(" ", $str);
    unset($str[0]);
    sort($str);
    foreach($str as $sort_str)
    echo "$sort_str\n";
?>
