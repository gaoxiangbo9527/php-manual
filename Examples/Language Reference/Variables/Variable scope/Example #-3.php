<?php
function &test()
{
    $a = 123;

    return $a;
}

$b =& test();
var_dump($b);
$b = 234;
$b =& test();
var_dump($b);

function &testObj()
{
    $obj = new stdClass();

    return $obj;
}

$obj1 =& testObj();
var_dump($obj1);

