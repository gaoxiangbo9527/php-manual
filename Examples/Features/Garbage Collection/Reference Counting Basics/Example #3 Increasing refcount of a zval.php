<?php
$a = "new string";
$b = $a;

xdebug_debug_zval( 'a' );
debug_zval_dump($a);

xdebug_debug_zval( 'b' );
debug_zval_dump($b);
