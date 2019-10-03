<?php
error_reporting(E_ALL);
function increment(&$var)
{
    $var++;
}

$a = 0;
call_user_func('increment', $a);
echo $a."\n";

// You can use this instead
call_user_func_array('increment', array(&$a));
echo $a."\n";
