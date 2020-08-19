<?php

$num = 5;
$location = 'tree';
$format = 'The %2$s contains %1$04d monkeys';
echo sprintf($format, $num, $location);
