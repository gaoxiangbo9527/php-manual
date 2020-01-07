<?php

function foo()
{
    unset($GLOBALS['bar']);
}

$bar = 'something';
foo();

var_dump(isset($bar));
var_dump(null === $bar);
