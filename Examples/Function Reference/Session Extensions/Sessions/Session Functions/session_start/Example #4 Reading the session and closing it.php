<?php
// If we know we don't need to change anything in the
// session, we can just read and close rightaway to avoid
// locking the session file and blocking other pages
session_start(
    [
        'cookie_lifetime' => 86400,
        'read_and_close' => true,
    ]
);
