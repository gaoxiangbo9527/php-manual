<?php

header('Content-Type: text/plain');
header('X-Test: foo');

function foo()
{
    foreach (headers_list() as $header) {
        if (strpos($header, 'X-Powered-By:') !== false) {
            header_remove('X-Powered-By');
        }
        header_remove('X-Test');
    }
}

$result = header_register_callback('foo');
echo "a";
