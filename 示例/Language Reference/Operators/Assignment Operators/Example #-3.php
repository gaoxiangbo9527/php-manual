<?php
class C {}

/* The following line generates the following error message:
 * Deprecated: Assigning the return value of new by reference is deprecated in...
 */
$o = &new C;
