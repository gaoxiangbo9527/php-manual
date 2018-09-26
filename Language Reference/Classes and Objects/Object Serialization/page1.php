<?php
include 'classa.inc';

$a = new A;
$s = serialize($a);

file_put_contents('store', $s);
