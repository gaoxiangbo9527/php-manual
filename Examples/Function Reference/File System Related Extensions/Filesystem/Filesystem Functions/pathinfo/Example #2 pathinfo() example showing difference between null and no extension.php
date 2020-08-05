<?php

$path_parts = pathinfo('/path/emptyextension.');
var_dump($path_parts);

$path_parts = pathinfo('/path/noextension');
var_dump($path_parts);
