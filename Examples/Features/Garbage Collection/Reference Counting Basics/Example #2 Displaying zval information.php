<?php
$a = "new string";
$b = 1;
$c = 1.0;
$d = true;
$e = null;

xdebug_debug_zval('a');
xdebug_debug_zval('b');
xdebug_debug_zval('c');
xdebug_debug_zval('d');
xdebug_debug_zval('e');

debug_zval_dump($a);
echo '<br>';
debug_zval_dump($b);
echo '<br>';
debug_zval_dump($c);
echo '<br>';
debug_zval_dump($d);
echo '<br>';
debug_zval_dump($e);
echo '<br>';

sleep(10);
