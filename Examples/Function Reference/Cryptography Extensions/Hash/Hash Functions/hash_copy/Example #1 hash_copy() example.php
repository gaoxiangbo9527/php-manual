<?php

$context = hash_init("md5");
hash_update($context, "data");

/* copy context to be able to continue using it */
$copy_context = hash_copy($context);

hash_update($context, "data");
echo hash_final($context), "\n";

hash_update($copy_context, "data");
echo hash_final($copy_context), "\n";
