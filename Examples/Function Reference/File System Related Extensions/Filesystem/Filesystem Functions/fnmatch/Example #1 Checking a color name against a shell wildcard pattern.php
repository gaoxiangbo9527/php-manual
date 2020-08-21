<?php

$color = 'a/gray';
if (fnmatch("*gr[ae]y", $color)) {
    echo "some form of gray ...";
}
