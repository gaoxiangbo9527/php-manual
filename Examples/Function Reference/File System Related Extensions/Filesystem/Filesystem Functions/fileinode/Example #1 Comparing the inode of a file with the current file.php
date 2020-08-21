<?php

$filename = 'index.php';
if (getmyinode() == fileinode($filename)) {
    echo 'You are checking the current file.';
}
