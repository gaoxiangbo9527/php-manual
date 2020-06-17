<?php
$data = [
    ["id" => 1, "name" => 'Tom'],
    ["id" => 2, "name" => 'Fred'],
];
foreach ($data as ["id" => $id, "name" => $name]) {
    echo "id: $id, name: $name\n";
}
echo PHP_EOL;
list(1 => $second, 3 => $fourth) = [1, 2, 3, 4];
echo "$second, $fourth\n";
