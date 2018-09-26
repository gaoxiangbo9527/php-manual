<?php
include("classa.inc");

$s = file_get_contents('store');
$a = unserialize($s);

$a->show_one();
