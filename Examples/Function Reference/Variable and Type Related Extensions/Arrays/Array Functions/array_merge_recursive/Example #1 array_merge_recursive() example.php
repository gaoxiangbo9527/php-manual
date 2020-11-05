<?php
$ar1 = array("color" => array("favorite" => "red"), 5, 'a' => [1 => 'b']);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"), 'a' => 'c');
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
