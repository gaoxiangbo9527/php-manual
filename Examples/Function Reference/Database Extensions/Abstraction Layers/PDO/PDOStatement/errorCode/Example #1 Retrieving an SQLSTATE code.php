<?php

$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '123456');
/* Provoke an error -- the BONES table does not exist */
$err = $dbh->prepare('SELECT skull FROM bones');
var_dump($err);
if (false === $err) {
    echo '预备语句失败';
} else {
    $err->execute();
}
echo "\nPDOStatement::errorCode(): ";
print $err->errorCode();
