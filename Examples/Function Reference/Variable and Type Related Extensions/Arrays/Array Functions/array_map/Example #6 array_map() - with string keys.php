<?php

$arr = ['stringkey' => 'value'];
function cb1($a)
{
    return [$a];
}

function cb2($a, $b)
{
    return [$a, $b];
}

var_dump(array_map('cb1', $arr));
var_dump(array_map('cb2', $arr, $arr));
var_dump(array_map(null, $arr));
var_dump(array_map(null, $arr, $arr));
