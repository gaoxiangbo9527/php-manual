<?php

// $df contains the number of bytes available on "/"
$df = disk_free_space("/");

// On Windows:
$df_c = disk_free_space("C:");echo $df_c;
$df_d = disk_free_space("D:");
