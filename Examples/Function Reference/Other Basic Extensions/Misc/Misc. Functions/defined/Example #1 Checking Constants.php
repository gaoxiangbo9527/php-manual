<?php
/* Note the use of quotes, this is important.  This example is checking
 * if the string 'TEST' is the name of a constant named TEST */
if (defined('TEST')) {
    var_dump(TEST);
}

const TEST1 = NULL;
if (defined('TEST1')) {
    var_dump(TEST1);
}
