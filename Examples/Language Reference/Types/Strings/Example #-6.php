<?php
$str = 'abc';

//echo $str[3];

//echo $str[-4];

$str[3] = 'd';
$str[-5] = '0';

$func = function () {
    echo 'func';
};

echo gettype($func);
