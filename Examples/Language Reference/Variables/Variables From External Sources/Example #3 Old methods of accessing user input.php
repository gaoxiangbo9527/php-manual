<?php
// WATCH OUT: these methods ARE NOT supported anymore.
// Valid ones were described above.

// Using import_request_variables() - this function has been removed in PHP 5.4.0
import_request_variables('p', 'p_');
echo $p_username;

// These long predefined variables were removed in PHP 5.4.0
echo $HTTP_POST_VARS['username'];

// Using register_globals. This feature was removed in PHP 5.4.0
echo $username;
