<?php

$value = 'something from somewhere';

setcookie("TestCookie", $value);
setrawcookie("TestCookie", $value);

var_dump(headers_list());
