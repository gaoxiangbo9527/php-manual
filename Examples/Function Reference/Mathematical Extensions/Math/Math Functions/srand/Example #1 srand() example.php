<?php

// seed with microseconds
function make_seed()
{
    list($usec, $sec) = explode(' ', microtime());
    return $sec + $usec * 1000000;
}

srand(make_seed());
$randval = rand();
