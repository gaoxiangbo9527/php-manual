<?php
print_r(false);
echo '<br>';
print_r(true);
echo '<br>';
print_r(1);
echo '<br>';
print_r(2.3);
echo '<br>';
print_r('abc');
echo '<br>';

$a = array (1, 2, array ("a", "b", "c", array ("a", "b", "c", array ("a", "b", "c"))));
print_r($a);
echo '<br>';

print_r(new Exception('abc'));
echo '<br>';

print_r(fopen('test.txt', 'rb'));
echo '<br>';

print_r(null);
echo '<br>';
