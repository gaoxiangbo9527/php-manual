<?php

$target = 'uploads.php';
$link = 'uploads';
symlink($target, $link);

echo readlink($link);
