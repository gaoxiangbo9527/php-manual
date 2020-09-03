<?php

var_dump(defined('SID'));
var_dump(session_id());

//var_dump(session_id('abcdefg'));
//var_dump(session_id());

session_start();

var_dump(defined('SID'));
var_dump(SID);
var_dump(session_id());

var_dump(session_id('aaaaaaa'));
var_dump(session_id());
