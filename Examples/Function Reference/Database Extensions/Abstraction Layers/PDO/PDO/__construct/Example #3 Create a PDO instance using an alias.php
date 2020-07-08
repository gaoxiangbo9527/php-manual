<?php

/* Connect to an ODBC database using an alias */
$dsn = 'mydb';
$user = '';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
