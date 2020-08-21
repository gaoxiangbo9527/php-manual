<?php

// Read 14 characters starting from the 21st character
$section = file_get_contents('./people.txt', false, null, 20, 14);
var_dump($section);
