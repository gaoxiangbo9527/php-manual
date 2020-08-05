<?php

chdir('/var/www/');
echo realpath('./../../etc/passwd') . PHP_EOL;

echo realpath('/tmp/') . PHP_EOL;
