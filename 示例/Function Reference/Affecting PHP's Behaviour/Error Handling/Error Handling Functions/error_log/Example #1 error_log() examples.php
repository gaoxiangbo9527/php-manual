<?php
// Send notification through the server log if we can not
// connect to the database.
if (!Ora_Logon($username, $password)) {
    error_log("Oracle database not available!", 0);
}

// Notify administrator by email if we run out of FOO
if (!($foo = allocate_new_foo())) {
    error_log("Big trouble, we're all out of FOOs!", 1,
        "operator@example.com");
}

// another way to call error_log():
error_log("You messed up!", 3, "/var/tmp/my-errors.log");
