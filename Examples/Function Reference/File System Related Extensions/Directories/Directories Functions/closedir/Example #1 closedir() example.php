<?php

$dir = "/etc/php5/";

// Open a known directory, read directory into variable and then close
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        $directory = readdir($dh);
        closedir($dh);
    }
}
