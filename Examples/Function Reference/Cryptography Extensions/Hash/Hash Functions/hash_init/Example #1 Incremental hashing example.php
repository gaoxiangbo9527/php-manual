<?php

$ctx = hash_init('md5');
hash_update($ctx, 'The quick brown fox ');
hash_update($ctx, 'jumped over the lazy dog.');
echo hash_final($ctx);

echo '<br>';
echo md5('The quick brown fox ' . 'jumped over the lazy dog.');
