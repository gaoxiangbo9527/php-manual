<?php

$greet = function ($name) {
    printf("Hello %s\r\n", $name);
};
var_dump($greet);
$greet('World');
$greet('PHP');
