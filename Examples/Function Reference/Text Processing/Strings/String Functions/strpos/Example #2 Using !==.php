<?php

$mystring = 'abc';
$findme = 'a';
$pos = strpos($mystring, $findme);

// The !== operator can also be used.  Using != would not work as expected
// because the position of 'a' is 0. The statement (0 != false) evaluates
// to false.
if ($pos !== false) {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
} else {
    echo "The string '$findme' was not found in the string '$mystring'";
}
