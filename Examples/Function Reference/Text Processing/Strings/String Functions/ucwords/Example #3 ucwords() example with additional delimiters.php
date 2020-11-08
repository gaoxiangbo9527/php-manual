<?php

$foo = "mike o'hara";
$bar = ucwords($foo);                 // Mike O'hara

$baz = ucwords($foo, " \t\r\n\f\v'"); // Mike O'Hara
