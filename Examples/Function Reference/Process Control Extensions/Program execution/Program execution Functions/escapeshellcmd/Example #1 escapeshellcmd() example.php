<?php

// We allow arbitrary number of arguments intentionally here.
$command = './configure ' . $_POST['configure_options'];

$escaped_command = escapeshellcmd($command);

system($escaped_command);
