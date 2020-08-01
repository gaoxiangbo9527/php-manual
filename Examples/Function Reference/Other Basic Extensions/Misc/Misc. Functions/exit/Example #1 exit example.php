<?php

$filename = '/path/to/data-file';
$file = fopen($filename, 'r')
or exit("unable to open file ($filename)");
