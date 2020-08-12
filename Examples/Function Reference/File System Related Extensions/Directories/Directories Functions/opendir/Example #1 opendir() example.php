<?php

$dir = '.';

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (false !== ($file = readdir($dh))) {
            echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
        }
        closedir($dh);
    }
}
