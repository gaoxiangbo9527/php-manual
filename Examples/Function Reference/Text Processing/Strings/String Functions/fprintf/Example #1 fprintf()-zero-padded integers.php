<?php

if (!($fp = fopen('date.txt', 'w'))) {
    return;
}

$year = 99;
$month = 1;
$day = 9;
fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);
// will write the formatted ISO date to date.txt
