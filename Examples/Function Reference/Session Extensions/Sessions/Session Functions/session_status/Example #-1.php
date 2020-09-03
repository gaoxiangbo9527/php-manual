<?php

echo 'PHP_SESSION_DISABLED ' . PHP_SESSION_DISABLED;
echo 'PHP_SESSION_NONE ' . PHP_SESSION_NONE;
echo 'PHP_SESSION_ACTIVE ' . PHP_SESSION_ACTIVE;

var_dump(session_status());
var_dump(defined('SID'));

session_start();
var_dump(session_status());
var_dump(defined('SID'));
var_dump(SID);
