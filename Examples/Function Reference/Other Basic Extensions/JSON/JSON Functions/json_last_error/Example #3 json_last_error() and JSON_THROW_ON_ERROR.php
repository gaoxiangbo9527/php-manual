<?php

// An invalid UTF8 sequence which causes JSON_ERROR_UTF8
json_encode("\xB1\x31");

// The following does not cause a JSON error
json_encode('okay', JSON_THROW_ON_ERROR);

// The global error state has not been changed by the former json_encode()
var_dump(json_last_error() === JSON_ERROR_UTF8);
