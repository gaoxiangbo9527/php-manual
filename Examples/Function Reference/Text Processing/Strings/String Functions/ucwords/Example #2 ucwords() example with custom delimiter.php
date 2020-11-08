<?php

$foo = 'hello|world!';
$bar = ucwords($foo);             // Hello|world!

$baz = ucwords($foo, "|");        // Hello|World!
