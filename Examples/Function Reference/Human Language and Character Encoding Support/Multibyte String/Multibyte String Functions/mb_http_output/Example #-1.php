<?php

var_dump(mb_http_output());
var_dump(mb_internal_encoding());

mb_internal_encoding('ASCII');

var_dump(mb_http_output());
var_dump(mb_internal_encoding());

mb_http_output('ASCII');

var_dump(mb_http_output());
var_dump(mb_internal_encoding());
