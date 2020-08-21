<?php

$fp = fopen('/tmp/lock.txt', 'r+');

/* Activate the LOCK_NB option on an LOCK_EX operation */
if (!flock($fp, LOCK_EX | LOCK_NB)) {
    echo 'Unable to obtain lock';
    exit(-1);
}

/* ... */

fclose($fp);
