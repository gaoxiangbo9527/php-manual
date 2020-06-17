<?php

$info = array('coffee', 'brown', 'caffeine');

list($a[0], $a[1], $a[2]) = $info;

var_dump($a);

list($b[0], , $b[2]) = $info;

var_dump($b);
