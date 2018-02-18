<?php
declare(strict_types=1);

$a= apcu_add('test', array(1,2,3,4));

if($a){

    echo 'OK';

} else {

    echo 'Blad';
}

//kasuje caly cache
$a= apcu_clear_cache();

//echo  phpinfo();