<?php
function exception_handler_1(Exception $e)
{
    echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
}

function exception_handler_2(Exception $e)
{
    echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
}

set_exception_handler('exception_handler_1');
set_exception_handler('exception_handler_2');

restore_exception_handler();

throw new Exception('This triggers the first exception handler...');
