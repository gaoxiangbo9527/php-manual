<?php

// $ds contains the total number of bytes available on "/"
$ds = disk_total_space("/");echo $ds;

// On Windows:
$ds = disk_total_space("C:");
$ds = disk_total_space("D:");
