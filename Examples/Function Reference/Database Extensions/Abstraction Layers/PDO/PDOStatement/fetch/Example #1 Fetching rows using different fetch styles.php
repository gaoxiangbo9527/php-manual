<?php

$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '123456');
$sth = $dbh->prepare("SELECT column_1 AS 'a', column_2 AS 'a' FROM test_1 WHERE column_1 >= ?");
$sth->execute([1]);

/* Exercise PDOStatement::fetch styles */
print("PDO::FETCH_ASSOC: ");
print("Return next row as an array indexed by column name\n");
$result = $sth->fetch(PDO::FETCH_ASSOC);
print_r($result);
print("\n");

print("PDO::FETCH_NAMED: ");
print("Return next row as an array indexed by column name\n");
$result = $sth->fetch(PDO::FETCH_NAMED);
print_r($result);
print("\n");

print("PDO::FETCH_BOTH: ");
print("Return next row as an array indexed by both column name and number\n");
$result = $sth->fetch(PDO::FETCH_BOTH);
print_r($result);
print("\n");

print("PDO::FETCH_LAZY: ");
print("Return next row as an anonymous object with column names as properties\n");
$result = $sth->fetch(PDO::FETCH_LAZY);
print_r($result);
print("\n");

print("PDO::FETCH_OBJ: ");
print("Return next row as an anonymous object with column names as properties\n");
$result = $sth->fetch(PDO::FETCH_OBJ);
print_r($result);
//print $result->name;
print("\n");
