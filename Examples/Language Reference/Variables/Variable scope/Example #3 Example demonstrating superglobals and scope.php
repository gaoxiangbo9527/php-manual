<?php
function test_global()
{
    // Most predefined variables aren't "super" and require
    // 'global' to be available to the functions local scope.
    global $HTTP_POST_VARS;

    echo $HTTP_POST_VARS['name'];

    // Superglobals are available in any scope and do
    // not require 'global'. Superglobals are available
    // as of PHP 4.1.0, and HTTP_POST_VARS is now
    // deemed deprecated.
    echo $_POST['name'];
}
