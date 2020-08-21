<?php

// opens a file and read some data
$fp = fopen("test.txt", "r");

// where are we ?
echo ftell($fp); // 11

$data = fgets($fp, 12);

// where are we ?
echo ftell($fp); // 11

fclose($fp);
