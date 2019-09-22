<?php
var_dump((int)[]);
var_dump((int)[1]);
var_dump((int)[1, 2]);

var_dump((int) new stdClass());

$test = function() {};
var_dump((int)$test);

var_dump((int)null);