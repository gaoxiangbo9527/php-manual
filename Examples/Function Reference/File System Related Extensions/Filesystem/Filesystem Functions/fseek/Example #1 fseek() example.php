<?php

$fp = fopen('somefile.txt', 'r');

// read some data
$data = fgets($fp, 4096);

// move back to the beginning of the file
// same as rewind($fp);
fseek($fp, 0);
