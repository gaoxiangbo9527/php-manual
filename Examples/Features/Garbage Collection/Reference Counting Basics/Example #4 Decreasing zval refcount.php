<?php

$a = "new string";
$c = $b = $a;
xdebug_debug_zval('a');
debug_zval_dump($a);
$b = 42;
xdebug_debug_zval('a');
debug_zval_dump($a);
unset($c);
xdebug_debug_zval('a');
debug_zval_dump($a);
