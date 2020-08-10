<?php

$text = "A very long woooooooooooooooooord. and something";
$newtext = wordwrap($text, 8, "\n", false);

echo "$newtext\n";
