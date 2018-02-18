<?php
declare(strict_types=1);
// http://php.net/manual/en/ref.apcu.php

$a= apcu_add('test', array(1,2,3,4));

if($a){

    echo 'OK';

} else {

    echo 'Blad';
}

//kasuje caly cache
//$a= apcu_clear_cache();


echo $a;

apcu_delete ( 'test');


//echo  phpinfo();