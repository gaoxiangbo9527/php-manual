<?php

$filename = 'shared_file.txt';
$format = "%s's Group ID @ %s: %d\n";
printf($format, $filename, date('r'), filegroup($filename));
chgrp($filename, 8);
clearstatcache(); // do not cache filegroup() results
printf($format, $filename, date('r'), filegroup($filename));
