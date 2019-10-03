<?php
function &returns_reference()
{
    $someref = 100;
    return $someref;
}

$newref = &returns_reference();
var_dump($newref);
