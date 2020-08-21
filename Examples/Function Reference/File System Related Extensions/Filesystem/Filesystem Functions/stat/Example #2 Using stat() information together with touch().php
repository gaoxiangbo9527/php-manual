<?php

/* Get file stat */
$stat = stat('C:\php\php.exe');

/* Did we failed to get stat information? */
if (!$stat) {
    echo 'stat() call failed...';
} else {
    /*
     * We want the access time to be 1 week
     * after the current access time.
     */
    $atime = $stat['atime'] + 604800;

    /* Touch the file */
    if (!touch('some_file.txt', time(), $atime)) {
        echo 'Failed to touch file...';
    } else {
        echo 'touch() returned success...';
    }
}
