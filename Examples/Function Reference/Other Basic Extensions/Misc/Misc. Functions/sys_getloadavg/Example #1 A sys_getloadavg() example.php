<?php

$load = sys_getloadavg();
if ($load[0] > 0.80) {
    header('HTTP/1.1 503 Too busy, try again later');
    die('Server too busy. Please try again later.');
}
