<?php

$data = 'abcdefdsfadspowerksdfkldsjfiasdfkajfkdsfjsadfjdskfjsdalkfjdslkfjdslkfjdsk';
$new_string = chunk_split(base64_encode($data));

echo $new_string;
