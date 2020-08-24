<?php

$func = function ($value) {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));
