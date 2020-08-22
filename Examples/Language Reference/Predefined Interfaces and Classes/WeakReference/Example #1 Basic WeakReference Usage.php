<?php

$obj = new stdClass;
$weakref = WeakReference::create($obj);
var_dump($weakref);
var_dump($weakref->get());
unset($obj);
var_dump($weakref);
var_dump($weakref->get());
?>
