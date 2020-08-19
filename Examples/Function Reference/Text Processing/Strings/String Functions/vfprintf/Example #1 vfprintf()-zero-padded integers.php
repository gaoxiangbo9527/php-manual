<?php

if (!($fp = fopen('date.txt', 'w'))) {
    return;
}

$year = 88;
$month = 1;
$day = 9;
vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));
// will write the formatted ISO date to date.txt
