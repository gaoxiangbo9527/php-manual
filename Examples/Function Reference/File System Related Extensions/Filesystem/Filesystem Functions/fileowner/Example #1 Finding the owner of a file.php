<?php

$filename = 'index.php';
print_r(posix_getpwuid(fileowner($filename)));
