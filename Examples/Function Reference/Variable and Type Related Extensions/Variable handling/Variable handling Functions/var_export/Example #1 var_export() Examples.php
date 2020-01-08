<?php
var_export(true);
echo '<br>';
var_export(1);
echo '<br>';
var_export(2.3);
echo '<br>';
var_export('abc');
echo '<br>';

$a = array (1, 2, array ("a", "b", "c", array ("a", "b", "c", array ("a", "b", "c"))));
var_export($a);
echo '<br>';

var_export(null);
echo '<br>';

$b = 3.1;
$v = var_export($b, true);
echo $v;
