<?php

//var_dump(ob_get_status(true));

function foo(string $buffer)
{
    return $buffer;
}

ob_start('foo');

var_dump(ob_get_status(true));
