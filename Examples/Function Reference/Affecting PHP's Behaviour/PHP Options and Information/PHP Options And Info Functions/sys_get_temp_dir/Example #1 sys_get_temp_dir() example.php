<?php

// Create a temporary file in the temporary
// files directory using sys_get_temp_dir()
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');

echo $temp_file;
