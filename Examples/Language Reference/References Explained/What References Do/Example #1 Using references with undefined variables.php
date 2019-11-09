<?php
function foo(&$var) { }

foo($a); // $a is "created" and assigned to null
var_dump($a);

$b = array();
foo($b['b']);
var_dump(array_key_exists('b', $b)); // bool(true)

$c = new StdClass;
foo($c->d);
var_dump(property_exists($c, 'd')); // bool(true)

$var =& $test;
var_dump($test, $var);

$e = new StdClass;
$f = $e;
$g =& $e;
unset($e);
//$e = 2;
var_dump($f);
var_dump($g);
