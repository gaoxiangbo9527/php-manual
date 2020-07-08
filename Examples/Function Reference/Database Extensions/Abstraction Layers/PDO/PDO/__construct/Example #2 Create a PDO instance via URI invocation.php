<?php

/* Connect to an ODBC database using driver invocation */
$dsn = 'uri:file:///usr/local/dbconnect';
$user = '';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
