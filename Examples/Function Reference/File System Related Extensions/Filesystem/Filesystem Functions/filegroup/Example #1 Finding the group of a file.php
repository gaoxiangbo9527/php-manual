<?php

$filename = 'index.php';
print_r(posix_getgrgid(filegroup($filename)));
