<?php

$text = "A very long woooooooooooord.";
$newtext = wordwrap($text, 8, "\n", true);

echo "$newtext\n";
