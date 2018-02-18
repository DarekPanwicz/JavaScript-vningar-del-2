<?php

$s = microtime(true);
if (file_exists("page2")) {
    file_get_contents("page2");
} else {
    $a = file_get_contents('https://www.wp.pl/');
    file_put_contents("page2", $a);
//    echo $a;
}
echo microtime(true) - $s;