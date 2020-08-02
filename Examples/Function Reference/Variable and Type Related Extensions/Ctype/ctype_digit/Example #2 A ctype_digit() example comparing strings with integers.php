<?php

$numeric_string = '42';
$integer = 42;

ctype_digit($numeric_string);  // true
ctype_digit($integer);         // false (ASCII 42 is the * character)

is_numeric($numeric_string);   // true
is_numeric($integer);          // true
