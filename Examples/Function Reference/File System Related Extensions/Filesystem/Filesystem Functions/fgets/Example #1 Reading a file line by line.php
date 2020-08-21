<?php

$handle = @fopen("inputfile.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 5)) !== false) {
        echo $buffer;
        echo strlen($buffer);
        echo '<br>';
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
