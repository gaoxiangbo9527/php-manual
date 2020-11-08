<?php

echo "Negative numbers\n";
$negative = array('-5', '3', '-2', '0', '-1000', '9', '1');
print_r($negative);
natsort($negative);
print_r($negative);

echo "Zero padding\n";
$zeros = array('09', '8', '10', '009', '011', '0');
print_r($zeros);
natsort($zeros);
print_r($zeros);
