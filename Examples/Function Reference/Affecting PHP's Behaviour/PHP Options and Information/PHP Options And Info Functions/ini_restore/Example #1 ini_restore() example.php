<?php

$setting = 'display_errors';

echo 'Current value for \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;

ini_set($setting, ini_get($setting) ? 0 : 1);
echo 'New value for \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;

ini_restore($setting);
echo 'Original value for \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;
