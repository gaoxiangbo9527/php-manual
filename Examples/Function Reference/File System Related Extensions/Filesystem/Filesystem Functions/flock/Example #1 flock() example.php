<?php

$fp = fopen("lock.txt", "r+");

if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
    sleep(20);
    ftruncate($fp, 0);      // truncate file
    fwrite($fp, "Write something here\n");
    fflush($fp);            // flush output before releasing the lock
    flock($fp, LOCK_UN);    // release the lock
} else {
    echo "Couldn't get the lock!";
}

fclose($fp);
