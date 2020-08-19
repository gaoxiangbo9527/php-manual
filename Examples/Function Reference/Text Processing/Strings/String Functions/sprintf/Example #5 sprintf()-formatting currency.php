<?php

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
echo $money;
echo "\n";
$formatted = sprintf("%01.2f", $money);
echo $formatted;
