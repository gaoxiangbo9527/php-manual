<?php

function print_caps(Iterator $iterator)
{
    echo strtoupper($iterator->current()) . "\n";
    return true;
}

$it = new ArrayIterator(array("Apples", "Bananas", "Cherries"));
iterator_apply($it, "print_caps", array($it));
